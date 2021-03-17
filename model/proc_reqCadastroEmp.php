<?php
session_start();
require_once("conexao.php");

$cnpj = mysqli_real_escape_string($conn, trim($_POST['cnpj']));
$nome = mysqli_real_escape_string($conn, trim($_POST['nome']));
$cep = mysqli_real_escape_string($conn, trim($_POST['cep']));
$uf = mysqli_real_escape_string($conn, trim($_POST['uf']));
$cidade = mysqli_real_escape_string($conn, trim($_POST['cidade']));
$bairro = mysqli_real_escape_string($conn, trim($_POST['bairro']));
$rua = mysqli_real_escape_string($conn, trim($_POST['rua']));
$numero = mysqli_real_escape_string($conn, trim($_POST['numero']));
$descricao = mysqli_real_escape_string($conn, trim($_POST['descricao']));
$servicos = mysqli_real_escape_string($conn, trim($_POST['servicos']));
$telefone = mysqli_real_escape_string($conn, trim($_POST['telefone']));
$email = mysqli_real_escape_string($conn, trim($_POST['email']));
$cpf = $_SESSION['cpf'];

$consulta = "INSERT INTO requisicoes (cnpj, nome, cep, uf, cidade, bairro, rua, numero, descricao, servicos, telefone, email, cpf) VALUES" .
"('$cnpj', '$nome', '$cep', '$uf', '$cidade', '$bairro', '$rua', '$numero', '$descricao', '$servicos', '$telefone', '$email', '$cpf')";

if($resultado = mysqli_query($conn, $consulta) === true){
    $_SESSION['msg'] = "<br> <b>Requisição cadastrada com sucesso</b><br><br>";
    header("location: ../view/homeUsuario.php");
}
    else{
        $_SESSION['msg'] = "<br><b>Requisição não realizada, verifique os dados inseridos<b><br><br>";
        header("location: ../view/reqCadastroEmp.php");
    }
?>