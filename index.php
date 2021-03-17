<?php
session_start();
require_once("../model/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
        <title>Público</title>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>
<body>
<h1>Pesquisar por Empresa</h1><br>
<a href="view/login.php">Login</a><br>
<a href="view/cadastroUsuario.php">Cadastrar-se</a><br><br>

<form method="POST">
    <label><b> Pesquisar Empresa: </b></label>
    <input type="text" name="busca" id="busca">
</form>

    <ul class="resultado"></ul>

    <script type="text/javascript" src="pesquisa.js"></script>

</body>
</html>

