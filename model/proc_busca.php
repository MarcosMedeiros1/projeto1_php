<?php
require_once("conexao.php");

$empresa = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

$sql = $pdo->prepare("SELECT * FROM empresas WHERE nome LIKE '%$empresa%'");

if(($sql->execute()) && ($sql->rowCount() != 0)){
    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
        echo "<strong> Nome: </strong>" . $row['nome'] . "<br>";
        echo "<strong>Descrição: </strong>" . $row['descricao'] . "<br><br>";

        echo "<a href='view/sobre.php?cnpj=" . $row['cnpj'] . "'>Ver mais informações sobre esta empresa</a><br><hr>";
    }

    }else{
        echo "Nenhum registro encontrado";
    }