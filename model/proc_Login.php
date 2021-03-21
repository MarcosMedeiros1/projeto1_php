<?php
session_start();
require_once("conexao.php");

if (isset($_POST['login'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha = md5($senha);
    $tipo = $_POST['tipo'];

    $sql = $pdo->query("SELECT * FROM usuarios WHERE email='$email' AND senha='$senha' AND tipo='$tipo'");
    $sql->execute();
    $row = $sql->fetch(PDO::FETCH_ASSOC);

    $_SESSION['email'] = $row['email'];
    $_SESSION['tipo'] = $row['tipo'];
    $_SESSION['nome'] = $row['nome'];
    $_SESSION['cpf'] = $row['cpf'];

    if($sql->rowCount() == 1 && $_SESSION['tipo']=="0"){
        header("location: ../view/homeUsuario.php");
    }
    elseif ($sql->rowCount() == 1 && $_SESSION['tipo']=="1") {
        header("location: ../view/homeAdm.php");
    }
    elseif ($sql->rowCount() == 1 && $_SESSION['tipo']=="2") {
        header("location: ../view/homeInstituto.php");
    }
    else {
        $_SESSION['msg'] = "E-mail ou senha incorretos<br><br>";
        header("Location: ../view/login.php");
    }
}