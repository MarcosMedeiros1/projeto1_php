<title>Produtos</title>
<h2>Produtos</h2>

<?php
    session_start();
    require_once("../model/conexao.php");

    $cnpj = $_GET['cnpj'];

    $sql = $pdo->prepare("SELECT * FROM produtos WHERE cnpj_responsavel = '$cnpj'");

    if(($sql->execute()) && ($sql->rowCount() != 0)){
        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            echo "<strong> Nome do produto: </strong>" . $row['nome'] . "<br>";
            echo "<strong> Descrição: </strong>" . $row['descricao'] . "<br><hr>";
            }
    }
    else{
        echo "Nenhuma produto cadastrado para essa empresa<br><br><hr>";
    }
?>