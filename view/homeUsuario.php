<?php
session_start();
require_once("../model/conexao.php");

if (!isset($_SESSION['email']) || $_SESSION['tipo']!="0") {
    header("location: login.php");
}

$cpf = $_SESSION['cpf'];

?>
<title>Painel Usuário</title>
<h1>Olá <?= $_SESSION['nome']?></h1>

<a href="../model/logout.php">Fazer Logout</a><br><br><br>
<a href="reqCadastroEmp.php">Requisitar cadastro de empresa</a><br><br>
<a href="reqUsuario.php">Visualizar suas requisições</a><br><br><br>

<?php

if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}

$consulta = "SELECT * FROM empresas WHERE cpf = '$cpf'";
$resultado = mysqli_query($conn, $consulta);

if(($resultado) AND ($resultado->num_rows != 0)){
    echo "<br><strong><p style=font-size:150%;>Suas empresas</p></strong>";
    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo "<strong> CNPJ: </strong>" . $linha['cnpj'] . "<br>";
        echo "<strong> Nome: </strong>" . $linha['nome'] . "<br>";
        echo "<strong>CEP: </strong>" . $linha['cep'] . "<br>";
        echo "<strong> UF: </strong>" . $linha['uf'] . "<br>";
        echo "<strong>Cidade: </strong>" . $linha['cidade'] . "<br>";
        echo "<strong>Bairro: </strong>" . $linha['bairro'] . "<br>";
        echo "<strong>Rua: </strong>" . $linha['rua'] . "<br>";
        echo "<strong>Descrição: </strong>" . $linha['descricao'] . "<br>";
        echo "<strong>Servicos prestados: </strong>" . $linha['servicos'] . "<br>";

        echo "<a href='novoProduto.php?cnpj=" . $linha['cnpj'] . "'><br>Adicionar Produtos</a><br><br>";

        echo "<a href='editar.php?cnpj=" . $linha['cnpj'] . "'>Editar informações da empresa</a><br><br>";

        echo "<a href='novoEstagio.php?cnpj=" . $linha['cnpj'] . "'>Adicionar demanda de estágio</a><hr>";
    }
}
?>