<?php

//conversao para boolean
$true = true;

$integer = (int) $true;
$integer = intval($integer);

echo "O valor boolean convertido é $integer <br><br>";

$integer = (int) false;
echo "O valor boolean convertido é $integer <br><br>";

//conversao para float
$float = 5.5;

$integer = (int) $float;
echo "O valor float convertido é $integer <br><br>";

//conversao de string para int
$string = '1'; //resultado = 1
$string = '2.11'; //resultado = 2
$string = 'texto'; //resultado = 0
$string = 'texto123'; //resultado = 0
$string = '123texto'; //resultado = 123

$integer = (int) $string;
echo "O valor string convertido é $integer <br><br>";

$soma = 12 + 'teste';
$soma = 12 + '1teste';
echo "O valor da soma é $soma <br><br>";