<?php 

$cpf = $_POST["cpfdigitado"];
include_once 'conexao.php';
$sql = "select cpf from funcionario where cpf = '".$cpf."'";

$result = mysqli_query($con, $result);
if(mysqli_num_rows($result) == 1)
{
    echo "Cpf já cadastrado!!";
}

mysqli_close($con);

?>