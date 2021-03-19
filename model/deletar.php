<?php
require_once("conexao.php");

$cnpj = $_GET['cnpj'];

    $consulta = "DELETE FROM requisicoes WHERE cnpj = '$cnpj'";
    
    if($resultado = mysqli_query($conn, $consulta) === true){
    $_SESSION['msg'] = "<br><strong>Requisição cancelada com sucesso</strong><br><br>";
    header("location: ../view/homeAdm.php");
    }

    else{
        $_SESSION['msg'] = "<br><strong>Algo deu errado :(</strong><br><br>";
        header("location: ../view/homeAdm.php");
    }
