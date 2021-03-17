<?php
session_start();
require_once("conexao.php");

$cnpj = mysqli_real_escape_string($conn, trim($_POST['cnpj']));
$nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
$descricao = mysqli_real_escape_string($conn, trim($_POST['descricao']));
$requisitos = mysqli_real_escape_string($conn, trim($_POST['requisitos']));

    $consulta = "INSERT INTO estagios (nome, descricao, requisitos, cnpj_responsavel) VALUES ('$nome', '$descricao', '$requisitos', '$cnpj')";
    
    if($resultado = mysqli_query($conn, $consulta) === true){
        $_SESSION['msg'] = "<br> <b>Estágio cadastrado com sucesso</b><br><br>";
        header("location: ../view/homeUsuario.php");
    }
    
    else{
            $_SESSION['msg'] = "<br><b>Estágio não cadastrado, verifique os dados inseridos<b><br><br>";
            header("location: ../view/homeUsuario.php");
    }