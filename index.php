<?php

$inputData = file('./input.txt');

if (!$inputData) {
    throw new Exception('Unable to load input file');
}

function getSumOfFirstAndLastDigitsPerLine(array $input)
{
    $sum = 0;
    foreach ($input as $line) {
        $combinedDigits = substr($line, 0, 1) . substr($line, -1, 1);

        yield $sum += (int)$combinedDigits;
    }
}

$generator = getSumOfFirstAndLastDigitsPerLine(preg_replace('/\D/', "", $inputData));
foreach ($generator as $value) {
    echo "$value\n";
}
