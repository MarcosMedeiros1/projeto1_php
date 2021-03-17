<?php
require_once("conexao.php");

$cnpj = $_GET['cnpj'];

if (!empty($cnpj)) {
    $consulta = "DELETE FROM requisicoes WHERE cnpj = '$cnpj'";
    $resultado = mysqli_query($conn, $consulta);
    header("location: homeAdm.php");
}
else{
    header("location: homeAdm.php");
}
