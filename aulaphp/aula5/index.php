<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
</head>
<body>

<?php
session_start();
if(isset($_SESSION["nome"])){
    header("location:painel.php");
}
?>


<div class="container">

    <div>

        <h3>Área restrita</h3>

        <form action="verificar-login.php" method="post">
    <input type="text" name="login" placeholder="login" required>
    <input type="text" name="senha" placeholder="senha" required>
    <input type="submit" value="Entrar" class="btn">

        </form>

        <br>
        <?php 
        
        if(isset($_GET["msg"]))
        {
            echo $_GET["msg"];
        }
        
        ?>

    </div>

</div>
    
</body>
</html>