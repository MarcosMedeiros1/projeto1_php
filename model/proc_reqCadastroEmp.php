<?php
session_start();
require_once("conexao.php");

$sql = $pdo->prepare("INSERT INTO requisicoes (cnpj, nome, cep, uf, cidade, bairro, rua, numero, descricao, servicos, telefone, email, site, cpf) VALUES" .
"(:cnpj, :nome, :cep, :uf, :cidade, :bairro, :rua, :numero, :descricao, :servicos, :telefone, :email, :site, :cpf)");

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
    $sql->bindValue(':telefone', $_POST['telefone']);
    $sql->bindValue(':email', $_POST['email']);
    $sql->bindValue(':site', $_POST['site']);
    $sql->bindValue(':cpf', $_SESSION['cpf']);

if($sql->execute()){
    $_SESSION['msg'] = "<br> <strong>Requisição cadastrada com sucesso</strong><br><br>";
    header("location: ../view/homeUsuario.php");
}
    else{
        $_SESSION['msg'] = "<br><strong>Requisição não realizada, verifique os dados inseridos<b><br><br>";
        header("location: ../view/reqCadastroEmp.php");
    }
?>