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
        Salário: <input name="salario" type="text"> <br>
        <input type="submit" name="operacao" value="=">
    </form>
    <?php

    $sal = $_POST['salario'];
    $op = $_POST['operacao'];
    $result = "";

    if(!empty($op))
    {
        if($op == '=') 
        {
            $resul = $sal * 15 / 100;  
        }

        echo 'salário: ' . $sal; 
    }
    ?><br>

    <?php
    echo '15% do salário é igual a: ' . $resul;
    ?>
</body>

</html>