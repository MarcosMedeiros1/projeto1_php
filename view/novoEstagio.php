<?php
session_start();
require_once("../model/conexao.php");

$cnpj = $_GET['cnpj'];
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <h2>Insira informações sobre o estágio</h2><br>

</head>
<body>
    <form action="../model/proc_Estagio.php" method="post">

        <label>CNPJ: </label>
        <input type="text" name="cnpj" value=<?=$cnpj?> readonly="true"><br><br><br>

        <label>Nome do estágio: </label>
        <input type="text" name="nome" required><br><br>

        <label>Descrição: </label>
        <textarea name="descricao" cols="30" rows="4" required></textarea><br><br>

        <label>Requisitos: </label>
        <textarea name="requisitos" cols="30" rows="4" required></textarea><br><br>

        <input type="submit" name="salvar" value="Salvar">
    </form>
</body>
</html>