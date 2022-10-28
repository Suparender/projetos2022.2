<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="" method="post">
        Salário: <input name="valor" type="text"> <br>
        <input type="submit" name="operacao" value="comparar">
    </form>
    <?php

    $val = $_POST['valor'];
    $op = $_POST['operacao'];

    if($op == 'comparar')
    {
        if($val < 0) 
        {
            echo 'Valor negativo';      
        }
        else if($val > 0) 
        {
            echo 'Valor positivo';    
        }
        else echo 'Igual a 0';
    }
    ?>
</body>

</html>