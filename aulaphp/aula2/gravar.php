<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gravado</title>
</head>
<body>
    
<?php
// resgatando os dados do form

$nome = $_POST['nome'];
$email = $_POST['email'];
$tel = $_POST['telefone'];
// = -> recebe/atribuição 
// != -> diferente
// && -> e
// == -> igual
// || -> ou

    if($nome != "" && $email != "" && $tel != "") {
        echo "Nome: " . $nome;
        echo "<br>E-mail: " . $email;
        echo "<br>Telefone: " . $tel;
 // fuso horário
        date_default_timezone_set("America/Sao_Paulo");
        $nometxt = $data = date("Y-m-d") . ".txt"; //2022-09-12.txt
// gravar informação em arquivo.txt
        $arquivo = fopen($nometxt, "a+");
// escrever no arquivo
        fwrite($arquivo, "Dados do cliente - Cadastro Realizado em: " . date("d-m-Y - H:i:s"));
        fwrite($arquivo, "\r\nNome: " . $nome);
        fwrite($arquivo, "\r\nE-mail: " . $email);
        fwrite($arquivo, "\r\nTelefone: " . $tel);
        fwrite($arquivo, "\r\n-------------------------------\r\n\r\n");
        fclose($arquivo); // fecha arquivo
        
    } else {
        echo "Preencha todos os campos!!";
    }
?>
<br>
<a href="index.php">Voltar</a>

</body>
</html>