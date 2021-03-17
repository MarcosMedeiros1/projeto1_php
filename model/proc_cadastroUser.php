<?php
session_start();
require_once("conexao.php");

$cpf = mysqli_real_escape_string($conn, trim($_POST['cpf']));
$nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
$email = mysqli_real_escape_string($conn, trim($_POST['email']));
$senha = mysqli_real_escape_string($conn, trim(md5($_POST['senha'])));

$consulta = "INSERT INTO usuarios (cpf, nome, email, senha) VALUES" . 
"('$cpf', '$nome', '$email', '$senha')";

if($resultado = mysqli_query($conn, $consulta) === true){
    $_SESSION['msg'] = "<br> <b>Usuário cadastrado com sucesso, faça o login</b><br><br>";
    header("location: ../view/login.php");
}
    else{
        $_SESSION['msg'] = "Usuário não cadastrado, verifique os dados inseridos";
        header("location: ../view/cadastroUsuario.php");
    }


?>