<?php
require_once("conexao.php");

    $sql = $pdo->prepare("DELETE FROM requisicoes WHERE cnpj = :cnpj");

    $sql->bindValue(":cnpj", $_GET['cnpj']);

    if($sql->execute()){
    $_SESSION['msg'] = "<br><strong>Requisição cancelada com sucesso</strong><br><br>";
    header("location: ../view/homeAdm.php");
    }

    else{
        $_SESSION['msg'] = "<br><strong>Algo deu errado :(</strong><br><br>";
        header("location: ../view/homeAdm.php");
    }
