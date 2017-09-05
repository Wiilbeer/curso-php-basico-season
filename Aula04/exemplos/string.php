<?php

$nome = $_GET['nome'] ?? '';

/* 
 * printf
 */
//printf("%s tem %.2f de altura", "Wilney", 1.79);

/*
 * strlen
 */
//$novo = strlen("Wiil");

/*
 * wordwrap
 */
//$novo = wordwrap($nome, 5, "<br>\n");

/*
 * trim
 */
//$novo = trim($nome);

/*
 * ltrim
 */
//$novo = ltrim($nome);

/*
 * rtrim
 */
//$novo = rtrim($nome);

/*
 * explode
 */
//$linguagens = "PHP-Java-Python";
//$novo = explode("-", $linguagens);

/*
 * str_split
 */
//$linguagens = "PHP-Java-Python";
//$novo = str_split($linguagens, 4);

/*
 * implode
 */
//$linguagens = array("PHP", "Java", "Python");
//$novo = implode(", ", $linguagens);

/*
 * strpos
 */
//$frase = "Aprendendo PHP";
//$novo = strpos($frase, "PHP");//CASE SENSITVE
//$novo = stripos($frase, "PHP");//NÃO CASE SENSITVE

/*
 * substr
 */
$texto = "Aprendendo PHP Básico";
$novo = substr($texto, 2, 5);
        
        
var_dump($novo);