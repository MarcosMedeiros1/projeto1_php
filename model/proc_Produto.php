<?php
session_start();
require_once("conexao.php");

$sql = $pdo->prepare("INSERT INTO produtos (nome, descricao, cnpj_responsavel) VALUES (:nome, :descricao, :cnpj)");

    $sql->bindValue(":nome", $_POST['nome']);
    $sql->bindValue(":descricao", $_POST['descricao']);
    $sql->bindValue(":cnpj", $_POST['cnpj']);

    if($sql->execute()){
        $_SESSION['msg'] = "<br> <strong>Produto cadastrado com sucesso</strong><br><br>";
        header("location: ../view/homeUsuario.php");
    }
    
    else{
            $_SESSION['msg'] = "<br><strong>Produto não cadastrado, verifique os dados inseridos<strong><br><br>";
            header("location: ../view/homeUsuario.php");
    }