<?php
require_once("conexao.php"); 

$cnpj = $_GET['cnpj'];

    $consulta = "INSERT INTO empresas SELECT * FROM requisicoes WHERE cnpj = '$cnpj'";
       
    if($resultado = mysqli_query($conn, $consulta) === true){
        $consulta = "DELETE FROM requisicoes WHERE cnpj = '$cnpj'";
        $resultado = mysqli_query($conn, $consulta);

        $_SESSION['msg'] = "<br><strong>Empresa cadastrada com sucesso</strong><br><br>";
        header("location: ../view/homeAdm.php");
    }
        else{
            $_SESSION['msg'] = "Cadastro não realizado, verifique os dados inseridos";
            header("location: ../view/homeAdm.php");
        }