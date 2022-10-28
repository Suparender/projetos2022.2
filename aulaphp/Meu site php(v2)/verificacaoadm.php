<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logando</title>
</head>
<body>
 
<?php

    session_start(); //habilita o uso da sessão nessa página

    include_once 'conexao.php';

    $username = $_POST["username"];
    $senha = $_POST["password"];
    

    
    
    $sql = "select * from conta where username = '".$username."' and senha = '".$senha."'";
    
    $result = mysqli_query($con, $sql);
    
    if(mysqli_num_rows($result) == 1){
        
        $row = mysqli_fetch_array($result);

        //guardando no navegador(em sessão)
        $_SESSION["username"] = $row["username"];
        $_SESSION["idtipo"] = $row["idtipo"];
        $_SESSION["tempo"] = time(); //guarda o time do momento do login

        if($row["idconta"] == 1)
        {

        ?> <script> alert "login efetuado";</script> <?php
        
        header("location:paineladm.php");
        }
        else{
            $msg = "Login/Senha inválido(s)";
            header("location:index.php?msg=".$msg);
        }
        
    }else{
        $msg = "Login/Senha inválido(s)";
        header("location:index.php?msg=".$msg);
    }
    
    mysqli_close($con);
    
?>


   
</body>
</html>