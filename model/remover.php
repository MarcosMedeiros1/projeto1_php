<?php
require_once("conexao.php");

$cnpj = $GET['cnpj'];

if (!empty($cnpj)) {
    $consulta = "DELETE FROM produtos WHERE cnpj = '$cnpj'";
    $resultado = mysqli_query($conn, $consulta);
    header("location: novoProduto.php");
}
else{
    header("location: novoProduto.php");
}