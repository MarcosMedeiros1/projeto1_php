<?php
session_start();
require_once("../model/conexao.php");

$cnpj = $_GET['cnpj'];
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Sobre</title>
</head>
<body>
<?php
$sql = $pdo->prepare("SELECT * FROM empresas WHERE cnpj = '$cnpj'");

if(($sql->execute()) && ($sql->rowCount() != 0)){
    while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
        echo "<p style=font-size:150%;>" . $row['nome'] . "</p>";
        echo "<strong>E-mail: </strong>" . $row['email'] . "<br>";
        echo "<strong>Telefone: </strong>" . $row['telefone'] . "<br>";
        echo "<strong>Site: </strong>" . $row['site'] . "<br>";
        echo "<strong>Descrição: </strong>" . $row['descricao'] . "<br>";
        echo "<strong>Servicos prestados: </strong>" . $row['servicos'] . "<br>";
        echo "<a href='verProdutos.php?cnpj=" . $row['cnpj'] . "'>Visualizar Produtos desta empresa</a><br><hr>";
    }
}
?>
</body>
</html>