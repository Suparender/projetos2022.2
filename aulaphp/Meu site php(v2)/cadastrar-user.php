<?php 
// inclui os determinados arquivos
include_once 'conexao.php';
include_once 'funcoes.php';

// pega os dados do formulário
$username = $_POST["username"];
$datenasc = $_POST["datanascimento"];
$email = $_POST["email"];
$senha = $_POST["password"];

//usa função no funcoes.php
$datenasc = dataBanco($datenasc);

$sql = "insert into conta values (null, '".$username."', '".$datenasc."', '".$email."', '".$senha."', 2)";


// faz o registro dos dados
if(mysqli_query($con, $sql))
{
    echo "Gravado com sucesso";
}
else 
{
    echo "Erro ao gravar";
}

// fecha a conexão com o banco
mysqli_close($con);

?>