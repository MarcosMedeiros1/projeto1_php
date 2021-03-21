<?php
session_start();
require_once("conexao.php");

$sql = $pdo->prepare("INSERT INTO usuarios (cpf, nome, email, senha) VALUES (:cpf, :nome, :email, :senha)");

    $sql->bindValue(":cpf", $_POST['cpf']);
    $sql->bindValue(":nome", $_POST['nome']);
    $sql->bindValue(":email", $_POST['email']);
    $sql->bindValue(":senha", md5($_POST['senha']));

if($sql->execute()){
    $_SESSION['msg'] = "<br> <strong>Usuário cadastrado com sucesso, faça o login</strong><br><br>";
    header("location: ../view/login.php");
}
    else{
        $_SESSION['msg'] = "Usuário não cadastrado, verifique os dados inseridos";
        header("location: ../view/cadastroUsuario.php");
    }


?>