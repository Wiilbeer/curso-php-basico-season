<?php

session_start();

require_once('functions.php');

$nome = $_POST['nome'] ?? ''; //
$linguagem = $_POST['linguagem'] ?? '';
$conhecimento = (bool) ($_POST['conhecimento'] ?? false);
$php = $_POST['php'] ?? '';
$endereco = $_POST['endereco'] ?? '';

echo '<pre>';
print_r($endereco);
echo '</pre>';
echo '<br><br>';
exit();


validacaoTamanhoNomeUtf8($nome);

validadoComSucesso("Validação realizada com sucesso!");

 header("Location: http://localhost/Aula05/");