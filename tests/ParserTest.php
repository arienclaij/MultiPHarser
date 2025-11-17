<?php
require_once("../vendor/autoload.php");

include("../classes/Parser.class.php");

$parser = new TextParser();
$input = "[b]Bold BBCode[/b] [quote]Haaaallo[/quote] [url=https://www.example.org]Test[/url] www.example.org";
$output = $parser->parse($input);

print "<div class='parsed-text'>$output</div>";