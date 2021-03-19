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
        echo "<strong>E-mail: </strong>" . $linha['email'] . "<br>";
        echo "<strong>Telefone: </strong>" . $linha['telefone'] . "<br>";
        echo "<strong>Site: </strong>" . $linha['site'] . "<br>";
        echo "<strong>Descrição: </strong>" . $linha['descricao'] . "<br>";
        echo "<strong>Servicos prestados: </strong>" . $linha['servicos'] . "<br>";
        echo "<a href='verProdutos.php?cnpj=" . $linha['cnpj'] . "'>Visualizar Produtos desta empresa</a><br><hr>";
    }
}
?>
</body>
</html>