<?php

$inputData = file('./input.txt');

if (!$inputData) {
    throw new Exception('Unable to load input file');
}

function getSumOfConcatenatedFirstAndLastDigitPerLine(array $input)
{
    $sum = 0;
    foreach ($input as $line) {
        $combinedDigits = substr($line, 0, 1) . substr($line, -1, 1);

        yield $sum += (int)$combinedDigits;
    }
}

$patterns = [
    "/one/",
    "/two/",
    "/three/",
    "/four/",
    "/five/",
    "/six/",
    "/seven/",
    "/eight/",
    "/nine/"
];

$replacements = [
    "o1e",
    "t2o",
    "t3e",
    "f4r",
    "f5e",
    "s6x",
    "s7n",
    "e8t",
    "n9e"
];

$inputData = preg_replace($patterns, $replacements, $inputData);
$inputData = preg_replace('/\D/', "", $inputData);
$generator = getSumOfConcatenatedFirstAndLastDigitPerLine($inputData);
foreach ($generator as $value) {
    echo "$value\n";
}
