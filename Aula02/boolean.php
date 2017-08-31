<?php

//conversao de inteiro para boolean
$variavel = 0; //false
$variavel = -1; //true


//conversao de string para boolean
$variavel = ""; //false
$variavel = "0"; //false
$variavel = " "; //false


//echo "A conversão de integer para boolean é $boolean <br><br>";

//conversao de array para boolean
$variavel = array(); //false
$variavel = array(1); //true

//conversao de NULL para boolean
$variavel = NULL; //false

$boolean = (bool) $variavel;

var_dump($boolean);