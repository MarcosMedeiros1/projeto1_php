<?php
session_start();
require_once("../model/conexao.php");

if (!isset($_SESSION['email']) || $_SESSION['tipo']!="1") {
    header("location: login.php");
}
?>

<title>Painel ADM</title>
<h1>Bem vindo ao Painel de Administração</h1>

<a href="../model/logout.php">Fazer Logout</a><br>

<?php
    $consulta = "SELECT * FROM requisicoes";
    $resultado = mysqli_query($conn, $consulta);

    if(($resultado) AND ($resultado->num_rows != 0)){

        echo "<br><b><p style=font-size:150%;>Requisições pendentes</p></b>";
        
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo "<b> CNPJ: </b>" . $linha['cnpj'] . "<br>";
            echo "<b>CPF do responsável: </b>" . $linha['cpf'] . "<br>";
            echo "<b> Nome: </b>" . $linha['nome'] . "<br>";
            echo "<b>CEP: </b>" . $linha['cep'] . "<br>";
            echo "<b> UF: </b>" . $linha['uf'] . "<br>";
            echo "<b>Cidade: </b>" . $linha['cidade'] . "<br>";
            echo "<b>Bairro: </b>" . $linha['bairro'] . "<br>";
            echo "<b>Rua: </b>" . $linha['rua'] . "<br>";
            echo "<b>Número: </b>" . $linha['numero'] . "<br>";
            echo "<b>Telefone: </b>" . $linha['telefone'] . "<br>";
            echo "<b>E-mail: </b>" . $linha['email'] . "<br><br>";
            echo "<b>Descrição: </b>" . $linha['descricao'] . "<br><br>";
            echo "<b>Serviços prestados: </b>" . $linha['servicos'] . "<br><br>";
            
            echo "<a href='../model/deletar.php?cnpj=" . $linha['cnpj'] . "'>Recusar</a>";
            echo " | ";
            echo "<a href='../model/aceitar.php?cnpj=" . $linha['cnpj'] . "'>Aceitar</a><br><hr><br>";
            }
    }
    else{
        echo "<br><b><p style=font-size:120%;>Nenhuma requisição pendente</p></b>";
    }
?>