<?php

class CodeHighlighter {
    private $code;
    private $maxVisibleLines;
    private $uniqueId;

    public function __construct($code, $maxVisibleLines = 20) {
        $this->code = $code;
        $this->maxVisibleLines = $maxVisibleLines;
        $this->uniqueId = 'code_' . uniqid();
    }

    public function highlight() {
        // Gebruik highlight_string en verwerk het resultaat
        $highlighted = highlight_string($this->code, true);

        // Verwijder de wrapper spans
        $highlighted = preg_replace('|^<code><span style="color: #000000">\s*|', '', $highlighted);
        $highlighted = preg_replace('|\s*</span>\s*</code>$|', '', $highlighted);

        // Vervang <br /> tags met echte newlines
        $highlighted = str_replace(['<br />', '<br/>', '<br>'], "\n", $highlighted);

        return $highlighted;
    }

    public function render() {
        $highlighted = $this->highlight();

        // Split de code in regels
        $lines = explode("\n", $highlighted);
        $totalLines = count($lines);
        $isCollapsible = $totalLines > $this->maxVisibleLines;

        $output = $this->getStyles();
        $output .= '<div class="code-container' . ($isCollapsible ? ' collapsible' : '') . '" id="' . $this->uniqueId . '">';
        $output .= '<div class="code-wrapper">';
        $output .= '<table class="code-table"><tr><td class="line-numbers"><pre>';

        // Regelnummers
        for ($i = 1; $i <= $totalLines; $i++) {
            $output .= $i . "\n";
        }

        $output .= '</pre></td><td class="code-content"><pre>';

        // Code met highlighting
        foreach ($lines as $line) {
            $output .= ($line ?: ' ') . "\n";
        }

        $output .= '</pre></td></tr></table>';
        $output .= '</div>';

        if ($isCollapsible) {
            $output .= '<div class="gradient-overlay"></div>';
            $output .= '<div class="toggle-container">';
            $output .= '<button class="toggle-btn" onclick="toggleCode(\'' . $this->uniqueId . '\')">';
            $output .= '<span class="expand-text">▼ Toon meer</span>';
            $output .= '<span class="collapse-text" style="display:none;">▲ Toon minder</span>';
            $output .= '</button>';
            $output .= '</div>';
        }

        $output .= '</div>';
        $output .= $this->getScript();

        return $output;
    }

    private function getStyles() {
        $maxHeight = $this->maxVisibleLines * 1.5 . 'rem';

        return <<<CSS
<style>
.code-container {
    position: relative;
    background: #282c34;
    border-radius: 8px;
    overflow: hidden;
    margin: 20px 0;
    font-family: 'Courier New', Consolas, monospace;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.code-container.collapsible .code-wrapper {
    max-height: {$maxHeight};
    overflow: hidden;
    transition: max-height 0.4s ease;
}

.code-container.collapsible.expanded .code-wrapper {
    max-height: none;
}

.code-wrapper {
    overflow-x: auto;
}

.code-table {
    width: 100%;
    border-collapse: collapse;
    border-spacing: 0;
}

.code-table td {
    padding: 0;
    vertical-align: top;
}

.line-numbers {
    background: #21252b;
    border-right: 2px solid #181a1f;
    user-select: none;
    width: 1%;
    white-space: nowrap;
}

.line-numbers pre {
    margin: 0;
    padding: 15px 15px 15px 10px;
    text-align: right;
    color: #5c6370;
    font-size: 13px;
    line-height: 1.5rem;
}

.code-content {
    width: 99%;
}

.code-content pre {
    margin: 0;
    padding: 15px;
    color: #abb2bf;
    font-size: 13px;
    line-height: 1.5rem;
    overflow-x: visible;
}

/* PHP Syntax highlighting kleuren */
.code-content span[style*="color: #0000BB"],
.code-content span[style*="color: #000000"] {
    color: #e06c75 !important;
}

.code-content span[style*="color: #007700"] {
    color: #c678dd !important;
}

.code-content span[style*="color: #DD0000"] {
    color: #98c379 !important;
}

.code-content span[style*="color: #FF8000"] {
    color: #d19a66 !important;
}

.gradient-overlay {
    position: absolute;
    bottom: 60px;
    left: 0;
    right: 0;
    height: 100px;
    background: linear-gradient(to bottom, transparent, #282c34 90%);
    pointer-events: none;
    opacity: 1;
    transition: opacity 0.3s ease;
}

.code-container.expanded .gradient-overlay {
    opacity: 0;
}

.toggle-container {
    background: #282c34;
    padding: 10px;
    text-align: center;
    border-top: 1px solid #21252b;
}

.toggle-btn {
    background: #3e4451;
    color: #abb2bf;
    border: none;
    padding: 8px 20px;
    border-radius: 5px;
    cursor: pointer;
    font-size: 14px;
    transition: background 0.2s ease;
}

.toggle-btn:hover {
    background: #4e5561;
}
</style>
CSS;
    }

    private function getScript() {
        return <<<SCRIPT
<script>
function toggleCode(id) {
    const container = document.getElementById(id);
    const expandText = container.querySelector('.expand-text');
    const collapseText = container.querySelector('.collapse-text');
    
    container.classList.toggle('expanded');
    
    if (container.classList.contains('expanded')) {
        expandText.style.display = 'none';
        collapseText.style.display = 'inline';
    } else {
        expandText.style.display = 'inline';
        collapseText.style.display = 'none';
        container.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
}
</script>
SCRIPT;
    }
}

// Voorbeeld gebruik:
$phpCode = <<<'PHP'
<?php
class ExampleClass {
    private $property;
    
    public function __construct($value) {
        $this->property = $value;
    }
    
    public function doSomething() {
        // Dit is een commentaar
        $result = [];
        
        for ($i = 0; $i < 10; $i++) {
            $result[] = $this->property * $i;
        }
        
        return $result;
    }
    
    public function processData($data) {
        if (empty($data)) {
            return null;
        }
        
        $processed = array_map(function($item) {
            return strtoupper($item);
        }, $data);
        
        return $processed;
    }
}

$example = new ExampleClass(5);
$numbers = $example->doSomething();
print_r($numbers);
echo "Holladiejee!";
PHP;

$highlighter = new CodeHighlighter($phpCode, 15);
echo $highlighter->render();

?>