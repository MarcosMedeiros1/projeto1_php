<?php
session_start();
require_once("../model/conexao.php");

$cnpj = $_GET['cnpj'];

?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Novo Produto</title>
    <h2>Produtos cadastrados</h2><br>

<?php
    $consulta = "SELECT * FROM produtos WHERE cnpj_responsavel = '$cnpj'";
    $resultado = mysqli_query($conn, $consulta);

    if(($resultado) AND ($resultado->num_rows != 0)){
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo "<strong> Nome do produto: </strong>" . $linha['nome'] . "<br>";
            echo "<strong> Descrição: </strong>" . $linha['descricao'] . "<br><hr>";
            }
    }
    else{
        echo "Nenhuma produto cadastrado para essa empresa<br><br><hr>";
    }
?>

</head>
<body>
    <h2>Insira informações sobre o produto</h2><br>
    <form action="../model/proc_Produto.php" method="post">

        <label>CNPJ: </label>
        <input type="text" name="cnpj" value=<?=$cnpj?> readonly="true"><br><br><br>

        <label>Nome do produto: </label>
        <input type="text" name="nome" required><br><br>

        <label>Descrição: </label>
        <textarea name="descricao" cols="30" rows="4" required></textarea><br><br>

        <input type="submit" name="salvar" value="Salvar">
    </form>
</body>
</html>