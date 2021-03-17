<title>Produtos</title>
<h2>Produtos</h2>

<?php
    session_start();
    require_once("../model/conexao.php");

    $cnpj = $_GET['cnpj'];

    $consulta = "SELECT * FROM produtos WHERE cnpj_responsavel = '$cnpj'";
    $resultado = mysqli_query($conn, $consulta);

    if(($resultado) AND ($resultado->num_rows != 0)){
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo "<b> Nome do produto: </b>" . $linha['nome'] . "<br>";
            echo "<b> Descrição: </b>" . $linha['descricao'] . "<br><hr>";
            }
    }
    else{
        echo "Nenhuma produto cadastrado para essa empresa<br><br><hr>";
    }
?>