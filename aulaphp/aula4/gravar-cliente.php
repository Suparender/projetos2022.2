<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// gravar dados
$nome = $_POST["nome"];
$email = $_POST["email"];
$cpf = $_POST["cpf"];
$sexo = $_POST["sexo"];

// conectar o mysql
                    // servidor, senha do servidor, senha do usuário, base de dados
$con = mysqli_connect("localhost", "root", "", "phpcrud");

// montar sql
$sql = "insert into cliente values(null, '".$nome."', '".$email."', '".$cpf."', '".$sexo."')";

if(mysqli_query($con, $sql))
{
    echo "Dados cadastrados com sucesso!!";
}
else 
{
    echo "Erro ao gravar!!!";
}
mysqli_close($con);

?>
    
</body>
</html>