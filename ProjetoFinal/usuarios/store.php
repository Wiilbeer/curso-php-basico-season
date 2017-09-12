<?php

require_once('usuarios-dao.php');
require_once('usuarios-validation.php');

$usuario = $_POST['usuario'];

validarNome($usuario['nome']);

if (existeErro()) {
    header("Location: http://localhost/ProjetoFinal/usuarios/criar-form.php");
} else {
    store($usuario);
    success("O usuário " . $usuario['nomne'] . " foi cadastrado com sucesso");
    header("Location: http://localhost/ProjetoFinal/usuarios/");
}

//var_dump($usuario);
//exit();

