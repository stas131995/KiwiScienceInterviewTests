<?php

include 'vendor/autoload.php';

use \Smalot\PdfParser\Parser;

if (!function_exists("extractPdfContent")) {
    /**
     * Return pdf content of a given filename after the give keyword.
     *
     * @param  \Smalot\PdfParser\Parser  $parser
     * @param  string  $filepath
     * @param  string  $keyword
     * @return string
     */
    function extractPdfContent(Parser $parser, string $filepath, string $keyword): string {
        $pdfText = $parser
            ->parseFile($filepath)
            ->getText();
        
        return $keyword . preg_replace("/(.*?={$keyword})|(Page [0-9]+ of [0-9]+)/", "", $pdfText);
    }
}


$parser = new Parser();
$filepath = "./source/sample.pdf";
$keyword = "Deploying the Sample";

echo extractPdfContent($parser, $filepath, $keyword);
