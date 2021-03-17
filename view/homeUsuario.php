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
    echo "<br><b><p style=font-size:150%;>Suas empresas</p></b>";
    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo "<b> CNPJ: </b>" . $linha['cnpj'] . "<br>";
        echo "<b> Nome: </b>" . $linha['nome'] . "<br>";
        echo "<b>CEP: </b>" . $linha['cep'] . "<br>";
        echo "<b> UF: </b>" . $linha['uf'] . "<br>";
        echo "<b>Cidade: </b>" . $linha['cidade'] . "<br>";
        echo "<b>Bairro: </b>" . $linha['bairro'] . "<br>";
        echo "<b>Rua: </b>" . $linha['rua'] . "<br>";
        echo "<b>Descrição: </b>" . $linha['descricao'] . "<br>";
        echo "<b>Servicos prestados: </b>" . $linha['servicos'] . "<br>";

        echo "<a href='novoProduto.php?cnpj=" . $linha['cnpj'] . "'><br>Adicionar Produtos</a><br><br>";

        echo "<a href='editar.php?cnpj=" . $linha['cnpj'] . "'>Editar informações da empresa</a><br><br>";

        echo "<a href='novoEstagio.php?cnpj=" . $linha['cnpj'] . "'>Adicionar demanda de estágio</a><hr>";
    }
}
?>