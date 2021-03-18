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
$consulta = "SELECT * FROM empresas WHERE cnpj = '$cnpj'";
$resultado = mysqli_query($conn, $consulta);

if(($resultado) AND ($resultado->num_rows != 0)){
    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo "<p style=font-size:150%;>" . $linha['nome'] . "</p>";
        echo "<b>E-mail: </b>" . $linha['email'] . "<br>";
        echo "<b>Telefone: </b>" . $linha['telefone'] . "<br>";
        echo "<b>Site: </b>" . $linha['site'] . "<br>";
        echo "<b>Descrição: </b>" . $linha['descricao'] . "<br>";
        echo "<b>Servicos prestados: </b>" . $linha['servicos'] . "<br>";
        echo "<a href='verProdutos.php?cnpj=" . $linha['cnpj'] . "'>Visualizar Produtos desta empresa</a><br><hr>";
    }
}
?>
</body>
</html>