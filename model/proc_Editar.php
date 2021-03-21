<?php
session_start();
require_once("conexao.php");

$sql = $pdo->prepare("UPDATE empresas SET nome = :nome, cep = :cep, uf = :uf, cidade = :cidade, bairro = :bairro, rua = :rua, numero = :numero," . 
    "descricao = :descricao, servicos = :servicos, site = :site WHERE cnpj = :cnpj");

    $sql->bindValue(":cnpj", $_POST['cnpj']);

    $sql->bindValue(':nome', $_POST['nome']);
    $sql->bindValue(':cep', $_POST['cep']);
    $sql->bindValue(':uf', $_POST['uf']);
    $sql->bindValue(':cidade', $_POST['cidade']);
    $sql->bindValue(':bairro', $_POST['bairro']);
    $sql->bindValue(':rua', $_POST['rua']);
    $sql->bindValue(':numero', $_POST['numero']);
    $sql->bindValue(':descricao', $_POST['descricao']);
    $sql->bindValue(':servicos', $_POST['servicos']);
    $sql->bindValue(':site', $_POST['site']);

        if ($sql->execute()) {
            $_SESSION['msg'] = "<br><strong>Dados atualizados com sucesso</strong><br><br>";
            header("location: ../view/homeUsuario.php");
        }
        else {
            $_SESSION['msg'] = "Atualização não realizada, verifique os dados inseridos";
            header("location: ../view/homeUsuario.php");
        }

