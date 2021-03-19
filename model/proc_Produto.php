<?php
session_start();
require_once("conexao.php");

$cnpj = mysqli_real_escape_string($conn, trim($_POST['cnpj']));
$nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
$descricao = mysqli_real_escape_string($conn, trim($_POST['descricao']));

    $consulta = "INSERT INTO produtos (nome, descricao, cnpj_responsavel) VALUES ('$nome', '$descricao', '$cnpj')";

    if($resultado = mysqli_query($conn, $consulta) === true){
        $_SESSION['msg'] = "<br> <strong>Produto cadastrado com sucesso</strong><br><br>";
        header("location: ../view/homeUsuario.php");
    }
    
    else{
            $_SESSION['msg'] = "<br><strong>Produto não cadastrado, verifique os dados inseridos<strong><br><br>";
            header("location: ../view/homeUsuario.php");
    }