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
<h1 class="h1">Página Inicial</h1><br>

        <a href="view/login.php" id="login">
            <button class="login">Página de login</button>
        </a>
    

<form method="POST" class="form">
            <label>Pesquisar empresas: </label>
            <input type="text" name="busca" id="busca">

            <ul class="resultado"></ul>    
    </form>


    <script type="text/javascript" src="model/pesquisa.js"></script>

</body>
</html>

