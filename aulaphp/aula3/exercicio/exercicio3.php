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

$lista = array("Cesar", "Michael", "Frankling", "Trevor", "Thomas", "Geraldo", "Marcelo", "Cesar");
$contado = 0;
for($i = 0; $i <= count($lista); $i++)
{
    echo $lista[$i] . "<br>";

    if($lista[$i] == "Cesar")
    {
        $contado++;
    }
}

echo "Contei: " . $contado . " Cesars.";
?>
    
</body>
</html>