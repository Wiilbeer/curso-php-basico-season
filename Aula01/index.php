<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Introdução ao PHP</title>
    </head>
    <body>
        <h1>testando o html</h1>
        <?php
        $nome = 'Wilney';
        $sobreNome = 'Pereira';
        echo 'Testando o PHP'.'<br>';
        echo "hello world".'<br>';
        echo 'Nome: '. $nome .' '. $sobreNome .'<br>';
        echo "Nome: $nome $sobreNome".'<br>';
        echo "Nome: {$nome} {$sobrenome}".'<br>';
        ?>
    </body>
</html>
