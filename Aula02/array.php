<?php

//$array = array(0 => 1, 1 =>10);
$array = array();
$array[] = 1;
$array[] = 10;

echo '<pre>';
print_r($array);
echo '</pre>';
echo '<br><br>';

echo "A posição 0 do array é " .$array[0]."<br>";
echo "A posição 1 do array é " .$array[1]."<br><br>";


//atribuicao de array de inicializacao
$array = array(1, 10);
$array [5] = 5;

echo '<pre>';
print_r($array);
echo '</pre>';
echo '<br><br>';

echo "A posição 0 do array é " .$array[0]."<br>";
echo "A posição 1 do array é " .$array[1]."<br>";
echo "A posição 5 do array é " .$array[5]."<br><br>";

//inicializacao do array apartir do indice 6
$array = array();
$array [6] = 6;

echo '<pre>';
print_r($array);
echo '</pre>';
echo '<br><br>';

//echo "A posição 0 do array é " .$array[0]."<br>";
//echo "A posição 1 do array é " .$array[1]."<br>";
//echo "A posição 5 do array é " .$array[5]."<br><br>";

//dicionarios
$array = array('livro' => 4, 'Autor' => 'Wilney');
$array [] = 5;
$array ["paginas"] = 55;

echo '<pre>';
print_r($array);
echo '</pre>';
echo '<br><br>';

echo "O autor do livro é o ". $array["Autor"];