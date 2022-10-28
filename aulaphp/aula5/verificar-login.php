<?php
    session_start(); //habilita o uso da sessão nessa página

    $login = $_POST["login"];
    $senha = md5($_POST["senha"]);

    $con = mysqli_connect("localhost","root","","cadastro1");
    
    $sql = "select * from usuario where login = '".$login."' and senha = '".$senha."'";
    
    $result = mysqli_query($con, $sql);
    
    if(mysqli_num_rows($result) == 1){
        
        $row = mysqli_fetch_array($result);

        //guardando no navegador(em sessão)
        $_SESSION["nome"] = $row["nome"];
        $_SESSION["perfil"] = $row["perfil"];
        $_SESSION["tempo"] = time(); //guarda o time do momento do login
        
        header("location:painel.php");
        
    }else{
        $msg = "Login/Senha inválido(s)";
        header("location:index.php?msg=".$msg);
    }
    
    mysqli_close($con);
    
?>
