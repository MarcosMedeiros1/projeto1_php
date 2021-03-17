<?php
session_start();
require_once("conexao.php");

if (isset($_POST['login'])){
    $email = $_POST['email'];
    $senha = $_POST['senha'];
    $senha = md5($senha);
    $tipo = $_POST['tipo'];

    $consulta = "SELECT * FROM usuarios WHERE email='$email' AND senha='$senha' AND tipo='$tipo'";
    $resultado = mysqli_query($conn, $consulta);
    $linha = mysqli_fetch_assoc($resultado);

    $_SESSION['email'] = $linha['email'];
    $_SESSION['tipo'] = $linha['tipo'];
    $_SESSION['nome'] = $linha['nome'];
    $_SESSION['cpf'] = $linha['cpf'];

    if($resultado->num_rows == 1 && $_SESSION['tipo']=="0"){
        header("location: ../view/homeUsuario.php");
    }
    elseif ($resultado->num_rows == 1 && $_SESSION['tipo']=="1") {
        header("location: ../view/homeAdm.php");
    }
    elseif ($resultado->num_rows == 1 && $_SESSION['tipo']=="2") {
        header("location: ../view/homeInstituto.php");
    }
    else {
        $_SESSION['msg'] = "E-mail ou senha incorretos<br><br>";
        header("Location: ../view/login.php");
    }
}