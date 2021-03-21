<?php
session_start();
require_once("conexao.php");

$sql = $pdo->prepare("INSERT INTO estagios (nome, descricao, requisitos, cnpj_responsavel) VALUES (:nome, :descricao, :requisitos, :cnpj)");

    $sql->bindValue(":nome", $_POST['nome']);
    $sql->bindValue(":descricao", $_POST['descricao']);
    $sql->bindValue(":requisitos", $_POST['requisitos']);
    $sql->bindValue(":cnpj", $_POST['cnpj']);
    
    if($sql->execute()){
        $_SESSION['msg'] = "<br> <strong>Estágio cadastrado com sucesso</strong><br><br>";
        header("location: ../view/homeUsuario.php");
    }
    
    else{
            $_SESSION['msg'] = "<br><strong>Estágio não cadastrado, verifique os dados inseridos<b><br><br>";
            header("location: ../view/homeUsuario.php");
    }