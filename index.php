<?php
session_start();
require_once("model/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="view/css/style.css">

        <title>Página inicial</title>

        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

</head>
<body>
<h1>Página Inicial</h1><br>

    <div class="link_login">
        <a href="view/login.php" id="login">Login</a><br>
    </div>

    <div class="link_cad">
        <a href="view/cadastroUsuario.php" id="cadastrar">Cadastrar-se</a><br><br>
    </div>

<form method="POST" class="form">
        <div class="pesquisa">
            <label for="pesquisa"><strong> Pesquisar: </strong></label>
            <input type="text" name="busca" id="busca">
        </div>
</form>

    
    <ul class='resultado'></ul>

    <script type="text/javascript" src="model/pesquisa.js"></script>

</body>
</html>

