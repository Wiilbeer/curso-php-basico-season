<?php
require_once('../partials/header.php');
if(!isset($_SESSION['auth'])) {
    header("Location: http://localhost/ProjetoFinal/auth/login-form.php");
}

if($_SESSION['auth']['grupo'] != 'adm') {
    header("Location: http://localhost/ProjetoFinal/");
}

require_once('usuarios-dao.php');
$usuarios = all();
?>

<div class="container">
    <h1>Usuários</h1>

    <br>

    <a href="criar-form.php" class="btn btn-primary">Cadastrar Usuários</a>

    <br>
    <br>
    <?php include ('../partials/success.php'); ?>
    <table class="table">
        <thead
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($usuarios as $key => $usuario): ?>
                <tr>
                    <td><?= $usuario['id'] ?></td>
                    <td><?= $usuario['nome'] ?></td>
                    <td><?= $usuario['email'] ?></td>
                    <td>
                        <a href="" class="btn btn-default">Visualizar</a>
                        <a href="" class="btn btn-primary">Editar</a>
                        <a href="usuarios-controller.php?id=<?= $usuario['id'] ?>&action=destroy" class="btn btn-danger">Deletar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>

        <tfoot
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Ações</th>
            </tr>
        </tfoot>
    </table>
</div>

<?php require_once('../partials/footer.php'); ?>