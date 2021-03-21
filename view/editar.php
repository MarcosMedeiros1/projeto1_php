<?php
session_start();
require_once("../model/conexao.php");

$cnpj = $_GET["cnpj"];

    $sql = $pdo->query("SELECT * FROM empresas WHERE cnpj = '$cnpj'");
    $sql->execute();
    $row = $sql->fetch(PDO::FETCH_ASSOC)
?>

<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Editar</title>
</head>
<body>
<h1>Editar dados da empresa</h1><br>

<form method="POST" action="../model/proc_Editar.php" id="formCadastro">

    <label>CNPJ: </label>
    <input type="text" name="cnpj" readonly="true" value=<?=$cnpj?>><br><br><br>

    <label>Nome: </label>
    <input type="text" name="nome" value="<?php echo $row['nome'] ?>" required><br><br>

    <label>CEP: </label>
    <input type="text" name="cep" value="<?php echo $row['cep'] ?>" required><br><br>

    <label>Logradouro: </label>
    <input type="text" name="rua" value="<?php echo $row['rua'] ?>" required><br><br>

    <label>Bairro: </label>
    <input type="text" name="bairro" value="<?php echo $row['bairro'] ?>" required><br><br>

    <label>Cidade: </label>
    <input type="text" name="cidade" value="<?php echo $row['cidade'] ?>" required><br><br>

    <label>UF: </label>
    <input type="text" name="uf" value="<?php echo $row['uf'] ?>" required><br><br>

    <label>Número: </label>
    <input type="text" name="numero" value="<?php echo $row['numero'] ?>" required><br><br>

    <label>Descrição: </label>
    <textarea name="descricao" cols="30" rows="4" id="desc"> <?php echo $row['descricao'] ?> </textarea> <br><br>

    <label>Serviços prestados</label>
    <textarea name="servicos" id="servicos" cols="30" rows="4"> <?php echo $row['servicos'] ?> </textarea><br><br>

    <label>Site da empresa: </label>
    <input type="text" name="site" value="<?php echo $row['site'] ?>"><br><br>

    <br><br><input type="submit" name="enviar" value="Enviar">
</body>
</html>