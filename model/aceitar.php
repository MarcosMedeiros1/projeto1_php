<?php
require_once("conexao.php"); 

    $sql = $pdo->prepare("INSERT INTO empresas SELECT * FROM requisicoes WHERE cnpj = :cnpj");
    
    $sql->bindValue(":cnpj", $_GET['cnpj']);

    if($sql->execute()){
        $sql = $pdo->prepare("DELETE FROM requisicoes WHERE cnpj = :cnpj");
        $sql->bindValue(":cnpj", $_GET['cnpj']);
        $sql->execute();
        
        $_SESSION['msg'] = "<br><strong>Empresa cadastrada com sucesso</strong><br><br>";
        header("location: ../view/homeAdm.php");
    }
        else{
            $_SESSION['msg'] = "Cadastro não realizado, verifique os dados inseridos";
            header("location: ../view/homeAdm.php");
        }