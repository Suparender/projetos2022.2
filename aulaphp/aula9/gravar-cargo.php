<?php

    $nomecargo = $_POST["nomecargo"];
    $salario = $_POST["salario"];

    $salario = str_replace(".", "", $salario);
    $salario = str_replace(",", ".", $salario);
    include_once 'conexao.php';

    $sql = "insert into cargo values (null, '".$nomecargo."', '".$salario."')";

    if(mysqli_query($con, $sql))
    {
        echo "gravado com sucesso";
    }
    else 
    {
        echo "erro ao gravar";
    }

    mysqli_close($con);

?>