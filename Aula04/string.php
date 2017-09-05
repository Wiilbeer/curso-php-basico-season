<?php

$nome = $_GET['nome'] ?? '';
$idade = $_GET['idade'] ?? '';

session_start();


if($nome != "Wilney"){
    $_SESSION['errors'][] = "O nome $nome está errado";
   
}

if($idade != 27){
    $_SESSION['errors'][] = "A idade $idade está errado";
    
}

if(!isset($_SESSION['errors'])) {
    $_SESSION['success'] = "Validação realizada com sucesso!";
}

 header("Location: http://localhost/Aula04/");