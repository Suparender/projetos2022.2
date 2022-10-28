<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    $materias = array("Física", "Matemática", "Biologia");
    // echo $materias[1];
    foreach ($materias as $valor)
        echo "$valor <br>";
    ?><br><br>

    <?php
    // laço while
    $contador = 0;
    while ($contador < 10) {
        // executar 
        $contador++;
        echo "O contador agr é: " . $contador . "<br>";
    }
    ?>

    <?php
    $cont = 10;
    do {
        echo "<br>O contador agr é: " . $cont;
        $cont--;
    } while ($cont >= 0);
    ?>

    <?php
    // laço for
    $frutas = array("Maçã", "Banana", "Melão", "Abacaxi", "Laranja");
    for ($contador1 = 0; $contador1 < count($frutas); $contador1++) {
        echo "<br><br>A fruta na posição: " . $contador1 . " é " . $frutas[$contador1];
    }

    ?>

    <br>

    <?php
    $par = 0;
    $impar = 0;
    for ($contador2 = 0; $contador2 < 10; $contador2++) {
        
        if ($contador2 % 2 == 0) {
            $par++;
        } else {
            $impar++;
        }
    }

    echo "<br>A quantidade de números pares é: " . $par;
    echo "<br>A quantidade de números impares é: " . $impar;
    ?>

</body>

</html>