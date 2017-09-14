<?php

/* 
 * Criando a conexao com o DB
 */

$conn = new PDO("mysql:host=localhost;dbname=projeto_final", "root", "season");



/*
 * Criacao do comando SQL (STMT $stmt)
 */

$stmt = $conn->prepare("SELECT * FROM grupos");



/*
 * Instrucao SQL com injecao de valores
 */

$stmt = $conn->prepare("INSERT INTO grupos (nome, slug) VALUES (?, ?)");
$stmt->bindParam(1,"nome");
$stmt->bindParam(2,"slug");



/*
 * Execucao do SQL, execute. Retorna um valor booleano se a operação foi um sucesso
 */

$stmt->execute();



/*
 *Erros do comando SQL. Os valores sao passados em um array 
 */

$array = $stmt->errorinfo();