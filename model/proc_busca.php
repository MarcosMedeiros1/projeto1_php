<?php
require_once("conexao.php");

$empresa = filter_input(INPUT_POST, 'palavra', FILTER_SANITIZE_STRING);

$consulta = "SELECT * FROM empresas WHERE nome LIKE '%$empresa%'";
$resultado = mysqli_query($conn, $consulta);

if(($resultado) AND ($resultado->num_rows != 0)){
    while ($linha = mysqli_fetch_assoc($resultado)) {
        echo "<br><br><b> Nome: </b>" . $linha['nome'] . "<br>";
        echo "<b>Descrição: </b>" . $linha['descricao'] . "<br><br>";

        echo "<a href='view/sobre.php?cnpj=" . $linha['cnpj'] . "'>Ver mais informações sobre esta empresa</a><br><hr>";
    }
}else{
    echo "Nenhum registro encontrado";
}