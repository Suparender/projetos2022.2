<?php
include_once 'autenticacao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
</head>
<body>
<div class="container" >
    <h3>Painel do sistema</h3>
    <P>Sejam bem vindos (a): <?php echo $_SESSION["nome"]; ?></P>
    <h4>Menu</h4>
    <?php
        if($_SESSION["perfil"] ==  "adm")
            {
            include_once 'menus/menu-adm.php';
            }
            elseif($_SESSION["perfil"] ==  "user")
            {
            include_once 'menus/menu-user.php';
            }
    
?>
</div>

    
</body>
</html>