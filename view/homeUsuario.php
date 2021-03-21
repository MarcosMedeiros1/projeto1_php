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

$sql = $pdo->prepare("SELECT * FROM empresas WHERE cpf = '$cpf'");

if(($sql->execute()) && ($sql->rowCount() != 0)){
    echo "<br><strong><p style=font-size:150%;>Suas empresas</p></strong>";
    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
        echo "<strong> CNPJ: </strong>" . $row['cnpj'] . "<br>";
        echo "<strong> Nome: </strong>" . $row['nome'] . "<br>";
        echo "<strong>CEP: </strong>" . $row['cep'] . "<br>";
        echo "<strong> UF: </strong>" . $row['uf'] . "<br>";
        echo "<strong>Cidade: </strong>" . $row['cidade'] . "<br>";
        echo "<strong>Bairro: </strong>" . $row['bairro'] . "<br>";
        echo "<strong>Rua: </strong>" . $row['rua'] . "<br>";
        echo "<strong>Descrição: </strong>" . $row['descricao'] . "<br>";
        echo "<strong>Servicos prestados: </strong>" . $row['servicos'] . "<br>";

        echo "<a href='novoProduto.php?cnpj=" . $row['cnpj'] . "'><br>Adicionar Produtos</a><br><br>";

        echo "<a href='editar.php?cnpj=" . $row['cnpj'] . "'>Editar informações da empresa</a><br><br>";

        echo "<a href='novoEstagio.php?cnpj=" . $row['cnpj'] . "'>Adicionar demanda de estágio</a><hr>";
    }
}
?>