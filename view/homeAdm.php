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

    $consulta = "SELECT * FROM requisicoes";
    $resultado = mysqli_query($conn, $consulta);

    if(($resultado) AND ($resultado->num_rows != 0)){

        echo "<br><strong><p style=font-size:150%;>Requisições pendentes</p></strong>";
        
        while ($linha = mysqli_fetch_assoc($resultado)) {
            echo "<strong> CNPJ: </strong>" . $linha['cnpj'] . "<br>";
            echo "<strong>CPF do responsável: </strong>" . $linha['cpf'] . "<br>";
            echo "<strong> Nome: </strong>" . $linha['nome'] . "<br>";
            echo "<strong>CEP: </strong>" . $linha['cep'] . "<br>";
            echo "<strong> UF: </strong>" . $linha['uf'] . "<br>";
            echo "<strong>Cidade: </strong>" . $linha['cidade'] . "<br>";
            echo "<strong>Bairro: </strong>" . $linha['bairro'] . "<br>";
            echo "<strong>Rua: </strong>" . $linha['rua'] . "<br>";
            echo "<strong>Número: </strong>" . $linha['numero'] . "<br>";
            echo "<strong>Telefone: </strong>" . $linha['telefone'] . "<br>";
            echo "<strong>E-mail: </strong>" . $linha['email'] . "<br><br>";
            echo "<strong>Descrição: </strong>" . $linha['descricao'] . "<br><br>";
            echo "<strong>Serviços prestados: </strong>" . $linha['servicos'] . "<br><br>";
            
            echo "<a href='../model/deletar.php?cnpj=" . $linha['cnpj'] . "'>Recusar</a>";
            echo " | ";
            echo "<a href='../model/aceitar.php?cnpj=" . $linha['cnpj'] . "'>Aceitar</a><br><hr><br>";
            }
    }
    else{
        echo "<br><strong><p style=font-size:120%;>Nenhuma requisição pendente</p></strong>";
    }
?>