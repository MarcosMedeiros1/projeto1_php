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
$site = mysqli_real_escape_string($conn, trim($_POST['site']));

$consulta = "UPDATE empresas SET nome='$nome', cep='$cep', uf='$uf', cidade='$cidade', bairro='$bairro', rua='$rua', numero='$numero'," . 
            "descricao='$descricao', servicos='$servicos', site='$site' WHERE cnpj = '$cnpj'";

$resultado = mysqli_query($conn, $consulta);

header("location: ../view/homeUsuario.php");