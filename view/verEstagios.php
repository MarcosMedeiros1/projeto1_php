<title>Demandas de estágio</title>
<h1>Demandas de estágio</h1>

<?php
    session_start();
    require_once("../model/conexao.php");

    if (!isset($_SESSION['email']) || $_SESSION['tipo']!="2") {
    header("location: login.php");
    }

    $sql = $pdo->prepare("SELECT * FROM estagios");

    if(($sql->execute()) && ($sql->rowCount() != 0)){
        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            echo "<strong> Nome do estágio: </strong>" . $row['nome'] . "<br>";
            echo "<strong> Descrição: </strong>" . $row['descricao'] . "<br>";
            echo "<strong> Requisitos : </strong>" . $row['requisitos'] . "<br><br><hr>";
            }
    }
    else{
        echo "Nenhuma demanda de estágio encontrada<br><br>";
    }
?>