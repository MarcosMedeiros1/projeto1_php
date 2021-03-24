<?php
session_start();
require_once("../model/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Cadastro</title>

    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
</head>
<body>

<h1>Dados para requisição de cadastro de empresa</h1><br>

<?php
if(isset($_SESSION['msg'])){
    echo $_SESSION['msg'];
    unset($_SESSION['msg']);
}
?>

<form method="POST" action="../model/proc_reqCadastroEmp.php" id="formCadastro">

    <label>CNPJ</label>
    <input type="text" name="cnpj" id="cnpj" required><br><br>

    <label>Nome: </label>
    <input type="text" name="nome" id="nome" required><br><br>

    <label>CEP: </label>
    <input type="text" name="cep" id="cep" required><br><br>

    <label>Logradouro: </label>
    <input type="text" name="rua" id="rua" required><br><br>

    <label>Bairro: </label>
    <input type="text" name="bairro" id="bairro" required><br><br>

    <label>Cidade: </label>
    <input type="text" name="cidade" id="cidade" required><br><br>

    <label>UF: </label>
    <input type="text" name="uf" id="uf" required><br><br>

    <label>Número: </label>
    <input type="text" name="numero" id="numero" required><br><br>

    <label>Descrição: </label>
    <textarea name="descricao" cols="30" rows="4" id="desc"></textarea> <br><br>

    <label>Serviços prestados</label>
    <textarea name="servicos" id="servicos" cols="30" rows="4"></textarea><br><br>

    <label>Telefone: </label>
    <input type="integer" name="telefone" required><br><br>

    <label>E-mail da empresa: </label>
    <input type="text" name="email" required><br><br>

    <label>Site: </label>
    <input type="text" name="site" required><br><br>

    <br><br><button type="submit">Salvar</button>
</form>

<script src="../model/viaCep.js"></script>

</body>
</html>