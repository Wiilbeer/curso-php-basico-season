<?php

//atribuicao de variavel padrao
$a = 10;
$b = $a;
$b = 5;

echo "A variável a é $a<br>";
echo "A variável b é $b<br><br>";

//atribuicao de variavel por referencia
$a = 10;
$b = &$a;
$b = 5;

echo "Atribuição por referência <br>";
echo "A variável a é $a<br>";
echo "A variável b é $b<br><br>";

