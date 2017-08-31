<?php

// conversao de um integer 
$integer = 10;

$float = (float) $integer;
$float = floatval($integer);
echo "A conversão de inteiro para float é $float <br><br>";

//conversao de boolean
$boolean = false;
$boolean = true;

$float = (float) $boolean;
echo "A conversão de boolean para float é $float <br><br>";

//conversao de string
$string = 'texto';
$string = '1.2texto';
$string = '1.3e4'; // 1.3 * (10**4)

$float = (float) $string;
echo "A conversão de string para float é $float <br><br>";
