<?php
session_start();
require_once("../model/conexao.php");

if (!isset($_SESSION['email']) || $_SESSION['tipo']!="2") {
    header("location: login.php");
}

?>

<title>Painel Instituto</title>
<h1>Bem vindo ao Painel do Instituto</h1>
    <a href="../model/logout.php">Fazer Logout</a><br><br><br>

    <a href="verEstagios.php">Visualizar demandas de estágio</a>
    <?php echo "<b> | </b>"?>
    <a href="verProblemas.php">Visualizar problemas de empresas</a>