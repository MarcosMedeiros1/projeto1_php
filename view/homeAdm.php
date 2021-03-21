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
    if(isset($_SESSION['msg'])){
        echo $_SESSION['msg'];
        unset($_SESSION['msg']);
    }

    $sql = $pdo->prepare("SELECT * FROM requisicoes");

    if(($sql->execute()) && ($sql->rowCount() != 0)){

        echo "<br><strong><p style=font-size:150%;>Requisições pendentes</p></strong>";
        
        while ($row = $sql->fetch(PDO::FETCH_ASSOC)) {
            echo "<strong> CNPJ: </strong>" . $row['cnpj'] . "<br>";
            echo "<strong>CPF do responsável: </strong>" . $row['cpf'] . "<br>";
            echo "<strong> Nome: </strong>" . $row['nome'] . "<br>";
            echo "<strong>CEP: </strong>" . $row['cep'] . "<br>";
            echo "<strong> UF: </strong>" . $row['uf'] . "<br>";
            echo "<strong>Cidade: </strong>" . $row['cidade'] . "<br>";
            echo "<strong>Bairro: </strong>" . $row['bairro'] . "<br>";
            echo "<strong>Rua: </strong>" . $row['rua'] . "<br>";
            echo "<strong>Número: </strong>" . $row['numero'] . "<br>";
            echo "<strong>Telefone: </strong>" . $row['telefone'] . "<br>";
            echo "<strong>E-mail: </strong>" . $row['email'] . "<br><br>";
            echo "<strong>Descrição: </strong>" . $row['descricao'] . "<br><br>";
            echo "<strong>Serviços prestados: </strong>" . $row['servicos'] . "<br><br>";
            
            echo "<a href='../model/deletar.php?cnpj=" . $row['cnpj'] . "'>Recusar</a>";
            echo " | ";
            echo "<a href='../model/aceitar.php?cnpj=" . $row['cnpj'] . "'>Aceitar</a><br><hr><br>";
            }
    }
    else{
        echo "<br><strong><p style=font-size:120%;>Nenhuma requisição pendente</p></strong>";
    }
?>