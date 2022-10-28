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
        Primeiro Número: <input name="num1" type="text"> <br>
        Segundo Número: <input name="num2" type="text"> <br>
        <input type="submit" name="operacao" value="+">
        <input type="submit" name="operacao" value="-">
        <input type="submit" name="operacao" value="*">
        <input type="submit" name="operacao" value="/">
    </form>

    <?php
    // criar código
    $n1 = $_POST['num1'];
    $n2 = $_POST['num2'];
    $op = $_POST['operacao'];
    if (!empty($op)) 
    {
            if($op == '+')
            $resul = $n1 + $n2;

            else if ($op == '-')
            $resul = $n1 - $n2;

            else if ($op == '*')
            $resul = $n1 * $n2;

            else
            $resul = $n1 / $n2;

            echo "O resultado da operação é: " . $resul;
    }

    ?>
</body>

</html>