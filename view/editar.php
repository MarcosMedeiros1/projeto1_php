<?php
session_start();
require_once("../model/conexao.php");

$cnpj = $_GET["cnpj"];

$consulta = "SELECT * FROM empresas WHERE cnpj = '$cnpj'";
$resultado = mysqli_query($conn, $consulta);
$linha = mysqli_fetch_assoc($resultado);
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
    <input type="text" name="nome" value="<?php echo $linha['nome'] ?>" required><br><br>

    <label>CEP: </label>
    <input type="text" name="cep" value="<?php echo $linha['cep'] ?>" required><br><br>

    <label>Logradouro: </label>
    <input type="text" name="rua" value="<?php echo $linha['rua'] ?>" required><br><br>

    <label>Bairro: </label>
    <input type="text" name="bairro" value="<?php echo $linha['bairro'] ?>" required><br><br>

    <label>Cidade: </label>
    <input type="text" name="cidade" value="<?php echo $linha['cidade'] ?>" required><br><br>

    <label>UF: </label>
    <input type="text" name="uf" value="<?php echo $linha['uf'] ?>" required><br><br>

    <label>Número: </label>
    <input type="text" name="numero" value="<?php echo $linha['numero'] ?>" required><br><br>

    <label>Descrição: </label>
    <textarea name="descricao" cols="30" rows="4" id="desc"> <?php echo $linha['descricao'] ?> </textarea> <br><br>

    <label>Serviços prestados</label>
    <textarea name="servicos" id="servicos" cols="30" rows="4"> <?php echo $linha['servicos'] ?> </textarea><br><br>

    <label>Site da empresa: </label>
    <input type="text" name="site" value="<?php echo $linha['site'] ?>"><br><br>

    <label>Facebook: </label>
    <input type="text" name="facebook" value="<?php echo $linha['facebook'] ?>"><br><br>

    <label>Instagram: </label>
    <input type="text" name="instagram" value="<?php echo $linha['instagram'] ?>"><br><br>

    <label>Twitter: </label>
    <input type="text" name="twitter" value="<?php echo $linha['twitter'] ?>"><br><br>

    <br><br><input type="submit" name="enviar" value="Enviar">
</body>
</html>