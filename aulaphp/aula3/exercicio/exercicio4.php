<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercício 3</title>
</head>
<body>

<?php

$lista = array(1, 2, 3, 3, 5, 8, 8, 9, 11, 11);
$contado = 0;
$n1 = $_POST['n'];

 
for($i = 0; $i <= count($lista); $i++)
{
       if($lista[$i] == $n1)
    {
        $contado++;
    }
}

echo "<br>Seu número apareceu: " . $contado . "vezes."

?>

<br>

<a href="form.php">Voltar</a>
    
</body>
</html>