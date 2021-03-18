<?php
require_once("conexao.php");

$cnpj = $_GET['cnpj'];

    $consulta = "DELETE FROM requisicoes WHERE cnpj = '$cnpj'";
    
    if($resultado = mysqli_query($conn, $consulta) === true){
    $_SESSION['msg'] = "<br><b>Requisição cancelada com sucesso</b><br><br>";
    header("location: ../view/homeAdm.php");
    }

    else{
        $_SESSION['msg'] = "<br><b>Algo deu errado :(</b><br><br>";
        header("location: ../view/homeAdm.php");
    }
