<title>Requisições</title>

<?php
session_start();
require_once("../model/conexao.php");

$cpf = $_SESSION['cpf'];

$sql = $pdo->prepare("SELECT * FROM requisicoes WHERE cpf = '$cpf'");

    if(($sql->execute()) && ($sql->rowCount() != 0)){
        echo "<strong><p style=font-size:150%;>Requisições pendentes</p></strong>";
        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            echo "<strong>Nome: </strong>" . $row['nome'] . "<br>";
            echo "<strong>CNPJ: </strong>" . $row['cnpj'] . "<br>";
            echo "<strong>CPF do responsável: </strong>" . $row['cpf'] . "<br>";
            echo "<strong>CEP: </strong>" . $row['cep'] . "<br>";
            echo "<strong> UF: </strong>" . $row['uf'] . "<br>";
            echo "<strong>Cidade: </strong>" . $row['cidade'] . "<br>";
            echo "<strong>Bairro: </strong>" . $row['bairro'] . "<br>";
            echo "<strong>Rua: </strong>" . $row['rua'] . "<br>";
            echo "<strong>Número: </strong>" . $row['numero'] . "<br>";
            echo "<strong>Telefone: </strong>" . $row['telefone'] . "<br>";
            echo "<strong>E-mail: </strong>" . $row['email'] . "<br><br>";
            echo "<strong>Descrição: </strong>" . $row['descricao'] . "<br><br>";
            echo "<strong>Serviços prestados: </strong>" . $row['servicos'] . "<br><hr><br>";
            }
    }
    else{
        echo "<br><strong>Você não possui nenhuma requisição<strong>";
    }