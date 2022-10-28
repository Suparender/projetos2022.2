<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Excluir</title>
</head>
<body>

    <?php

    $cod = $_GET["cod"];
    $con = mysqli_connect("localhost", "root", "", "cadastro1");
    $sql = "delete from cliente where cod_cli = " . $cod;
    if (mysqli_query($con, $sql)) {

        $msg = "cliente excluido com sucesso!!";

    } else {

        $msg = "Erro ao excluir!!";

    };

        // fechando
    mysqli_close($con);

    ?>

    <script>
    
        alert("<?php echo $msg; ?>");
        location.href="consultar-cliente.php";
    
    </script>
    
</body>
</html>