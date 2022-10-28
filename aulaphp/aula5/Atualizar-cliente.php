<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title></title>

</head>
<body>
    <?php
        //resgatar os dados do form

    $cod = base64_decode($_POST["cod"]);
    $nome = $_POST["nome"];
    $cpf = $_POST["cpf"];

        //conectar ao banco

    $con = mysqli_connect("localhost", "root", "", "cadastro1");

        //montar a instrução sql - atualizar

    $sql = "update cliente set nome= '" . $nome . "', cpf= '" . $cpf . "' where cod_cli= '" . $cod . "' ";
                //executar a instrução sql

    if (mysqli_query($con, $sql)) {
        $msg = "Dados atualizados com sucesso!";

    } else {
        $msg = "ERRO ao atualizar!!!";

    }

                //fechar a conexão

    mysqli_close($con);

    ?>
    <script>

        alert('<?php echo $msg ?>');
        location.href="consultar-cliente.php";

    </script>
    
</body>
</html>