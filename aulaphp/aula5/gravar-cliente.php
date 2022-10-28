<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>gravando</title>
</head>
<body>

<?php
// pegar os valores
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];

// conexão com o banco
$con = mysqli_connect("localhost", "root", "", "cadastro1"); 

// montar instrução
$sql = "insert into cliente values(null, '".$nome."', '".$cpf."')";

if(mysqli_query($con, $sql))
{
    echo "Dados inseridos com sucesso!";
}
else
{
    echo "Deu erro";
}
// fechar a conexão
mysqli_close($con);

?>
    
</body>
</html>