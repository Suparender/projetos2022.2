<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

</head>
<body>

    <?php

    include_once "conexao.php";
    include_once "funcoes.php";

        //Vamos chamar através do post os dados do form para a varável

    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $dtnasc = dataBanco($_POST["dtnasc"]); // 28-09-2022 ---> Mysql 2022-09-28
    $cpf = $_POST["cpf"];

    echo "Data Invertida...<br>";
    echo $dtnasc;
    echo "<br>Data Normal...<br>";
    echo dataTela($dtnasc);

    $cargo = $_POST["cargo"];
    $sql = "insert into funcionario values(null, '".$nome."', '".$email."', '".$dtnasc."', '".$cpf."', '".$cargo."')";
    if(mysqli_query($con, $sql))
    {
        $msg = "Dados cadastrados com sucesso!";
    }
    else
    {
        $msg = "Erro ao cadastrar";
    }

    mysqli_close($con);
    ?>

    <script>
        alert('<?php echo $msg ?>');
        location.href="index.php";
    </script>
    
</body>
</html>