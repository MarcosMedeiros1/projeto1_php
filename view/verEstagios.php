<title>Demandas de estágio</title>
<h1>Demandas de estágio</h1>

<?php
    session_start();
    require_once("../model/conexao.php");

    if (!isset($_SESSION['email']) || $_SESSION['tipo']!="2") {
    header("location: login.php");
    }

    $consulta = "SELECT * FROM estagios";
    $resultado = mysqli_query($conn, $consulta);

    if(($resultado) AND ($resultado->num_rows != 0)){
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo "<b> Nome do estágio: </b>" . $linha['nome'] . "<br>";
            echo "<b> Descrição: </b>" . $linha['descricao'] . "<br>";
            echo "<b> Requisitos : </b>" . $linha['requisitos'] . "<br><br><hr>";
            }
    }
    else{
        echo "Nenhuma demanda de estágio encontrada<br><br>";
    }
?>