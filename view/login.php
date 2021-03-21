<?php
session_start();
require_once("../model/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login</title>
    
</head>
<body>
    <a href="../index.php">Pesquisar empresas</a>
    <h1 class="titulo01">Login</h1>
    
    <h>Não tem uma conta? </h>
    <a href="cadastroUsuario.php">Cadastre-se</a><br><br>

    <?php if(isset($_SESSION['msg'])){
            echo $_SESSION['msg'];
            unset($_SESSION['msg']);
        }  
    ?>

    <form action="../model/proc_Login.php" method="POST" id="formLogin">

        <label>E-mail </label>
        <input type="text" name="email" id="email" required>

        <label>Senha </label>
        <input type="password" name="senha" id="senha" required><br><br>

        <label for="tipo">Selecione: </label>

            <input type="radio" name="tipo" value="0" required>
            <label for="tipo">Usuário | </label>

            <input type="radio" name="tipo" value="1" required>
            <label for="tipo">Administrador | </label>

            <input type="radio" name="tipo" value="2" required>
            <label for="tipo">Instituto</label>

        <input type="submit" name="login" value="Entrar">

        </form>
</body>
</html>