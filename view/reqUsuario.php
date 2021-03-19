<title>Requisições</title>

<?php
session_start();
require_once("../model/conexao.php");

$cpf = $_SESSION['cpf'];

$consulta = "SELECT * FROM requisicoes WHERE cpf = '$cpf'";
$resultado = mysqli_query($conn, $consulta);

    if(($resultado) AND ($resultado->num_rows != 0)){
        echo "<strong><p style=font-size:150%;>Requisições pendentes</p></strong>";
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo "<strong>Nome: </strong>" . $linha['nome'] . "<br>";
            echo "<strong>CNPJ: </strong>" . $linha['cnpj'] . "<br>";
            echo "<strong>CPF do responsável: </strong>" . $linha['cpf'] . "<br>";
            echo "<strong>CEP: </strong>" . $linha['cep'] . "<br>";
            echo "<strong> UF: </strong>" . $linha['uf'] . "<br>";
            echo "<strong>Cidade: </strong>" . $linha['cidade'] . "<br>";
            echo "<strong>Bairro: </strong>" . $linha['bairro'] . "<br>";
            echo "<strong>Rua: </strong>" . $linha['rua'] . "<br>";
            echo "<strong>Número: </strong>" . $linha['numero'] . "<br>";
            echo "<strong>Telefone: </strong>" . $linha['telefone'] . "<br>";
            echo "<strong>E-mail: </strong>" . $linha['email'] . "<br><br>";
            echo "<strong>Descrição: </strong>" . $linha['descricao'] . "<br><br>";
            echo "<strong>Serviços prestados: </strong>" . $linha['servicos'] . "<br><hr><br>";
            }
    }
    else{
        echo "Você não possui nenhuma requisição<br><br>";
    }