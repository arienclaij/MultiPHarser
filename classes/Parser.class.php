<?php
use Nbbc\BBCode;

class TextParser
{
    private BBCode $bbcode;

    public function __construct()
    {
        // NBBC parser
        $this->bbcode = new BBCode();

    }

    /**
     * Parse text met BBCode
     *
     * @param string $input
     * @return string
     */
    public function parse(string $input): string
    {
        // Eerst BBCode parsen
        $output = $this->bbcode->Parse($input);

        return $output;
    }
}