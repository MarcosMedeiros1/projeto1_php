<?php
session_start();
require_once("../model/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Login</title>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/jquery.validate.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#formLogin").validate({
                rules:{
                    email:{
                        email: true
                    },
                    senha:{
                        password: true
                    }
                }
            })
        })
    </script>
    
</head>
<body>
    <a href="../index.php">Pesquisar empresas</a>
    <h1>Login</h1>
    
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