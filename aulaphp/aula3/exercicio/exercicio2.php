<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercício 2</title>
</head>
<body>

<?php

$contado= 0;
for ($contador = 0; $contador <= 20; $contador++) {

    echo "<br>Número: " . $contador;
    if($contador == 8)
    {
        $contado++;
    }
}

echo "<br> Contado:" . $contado;

?>
    
</body>
</html>