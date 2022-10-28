<?php

session_start();
// (!) nega/reverte uma afirmação
if(!isset($_SESSION["nome"]))
{
    section_destroy();
    $msg = "<span class='red-text'>Acesso negado!</span>";
    header("location:index.php?msg=" . $msg);
} 
elseif($_SESSION["tempo"] + 5*60 < time()) 
{
    $msg = "Sessão expirada";
    header("location:index.php?msg=" . $msg);
} 
else
{
    $_SESSION["tempo"] = time();
}

?>