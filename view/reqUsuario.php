<title>Requisições</title>

<?php
session_start();
require_once("../model/conexao.php");

$cpf = $_SESSION['cpf'];

$consulta = "SELECT * FROM requisicoes WHERE cpf = '$cpf'";
$resultado = mysqli_query($conn, $consulta);

    if(($resultado) AND ($resultado->num_rows != 0)){
        echo "<b><p style=font-size:150%;>Requisições pendentes</p></b>";
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo "<b>Nome: </b>" . $linha['nome'] . "<br>";
            echo "<b>CNPJ: </b>" . $linha['cnpj'] . "<br>";
            echo "<b>CPF do responsável: </b>" . $linha['cpf'] . "<br>";
            echo "<b>CEP: </b>" . $linha['cep'] . "<br>";
            echo "<b> UF: </b>" . $linha['uf'] . "<br>";
            echo "<b>Cidade: </b>" . $linha['cidade'] . "<br>";
            echo "<b>Bairro: </b>" . $linha['bairro'] . "<br>";
            echo "<b>Rua: </b>" . $linha['rua'] . "<br>";
            echo "<b>Número: </b>" . $linha['numero'] . "<br>";
            echo "<b>Telefone: </b>" . $linha['telefone'] . "<br>";
            echo "<b>E-mail: </b>" . $linha['email'] . "<br><br>";
            echo "<b>Descrição: </b>" . $linha['descricao'] . "<br><br>";
            echo "<b>Serviços prestados: </b>" . $linha['servicos'] . "<br><hr><br>";
            }
    }
    else{
        echo "Você não possui nenhuma requisição<br><br>";
    }