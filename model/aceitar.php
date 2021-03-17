<?php
require_once("conexao.php");

// Aceita uma requisição 

$cnpj = $_GET['cnpj'];

if(!empty($cnpj)){
    $consulta = "INSERT INTO empresas SELECT * FROM requisicoes WHERE cnpj = $cnpj";
    $resultado = mysqli_query($conn, $consulta);

    $consulta = "DELETE FROM requisicoes WHERE cnpj = '$cnpj'";
    
    if($resultado = mysqli_query($conn, $consulta) === true){
        $_SESSION['msg'] = "<br><b>Empresa cadastrada com sucesso</b><br><br>";
        header("location: homeAdm.php");
    }
        else{
            $_SESSION['msg'] = "Cadastro não realizado, verifique os dados inseridos";
            header("location: reqCadastroEmp.php");
        }
}