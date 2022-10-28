<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>aula 2</title>
</head>
<body>
<h2>Formulário de cadastro</h2>
<form action="gravar.php" method="post">
    <h3>Nome:</h3>
        <input type="text" name="nome">
    <h3>E-mail:</h3>
        <input type="text" name="email">
    <h3>Telefone:</h3>
        <input type="text" name="telefone"><br> <br>
        <input type="submit" value="Cadastrar" name="botao">
</form>

<?php
$nome = $_POST['nome'];

echo $nome;
?>
    
</body>
</html>