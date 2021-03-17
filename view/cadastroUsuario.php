<?php
session_start();
require_once("../model/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastrar Usuário</title>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="js/jquery.validate.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $("#formCadastro").validate({
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

    <a href="../view/login.php">Fazer Login</a>

    <h1>Cadastrar Usuário</h1><br>        

    <?php 
    
    ?>

    <form method="POST" action="../model/proc_cadastroUser.php" id="formCadastro">

        <label>CPF: </label>
        <input type="text" name="cpf" id="cpf" required><br><br>

        <label>Nome: </label>
        <input type="text" name="nome" id="nome" required><br><br>

        <label>E-mail: </label>
        <input type="email" name="email" id="email" required><br><br>

        <label>Senha: </label>
        <input type="password" name="senha" id="senha" required><br><br>

        <input type="submit" name="salvar" value="Confirmar">

    </form>

</body>
</html>