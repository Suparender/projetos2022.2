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
    
    $titulo = $_POST["titulo"];
    $dtevento = $_POST["dtevento"];
    $foto = $_FILES["foto"];
    $descricao = $_POST["descricao"];
    $site = $_POST["site"];
    
   // var_dump($foto); // mostra informações sobre  a variavel
    
    $ext = explode(".", $foto["name"]); // foto.ferias.jpeg - pegou o nome do arquivo e tira os pontos
    $ext = array_reverse($ext); // jpeg ferias foto
    $ext = strtolower($ext[0]); //

    // verificar se a extensão é valida
    if($ext != "jpg" && $ext !=  "jpeg" && $ext != "gif" && $ext != "png")
    {
        echo "Arquivo inválido";
    }
    elseif($foto["size"] > 1024*500) // verificando se o arquivo é maior q 500kb
    {
        echo "tamanho excedido";
    }  
    else 
    {
        $nomedafoto = date("YmdHis").rand(1000,9999) . "." . $ext; //gerar nome para o arquivo
    }

   //echo "$foto";

    include_once 'conexao.php';
    $sql = "insert into evento values(null, '".$titulo."', '".$dtevento."', '".$nomedafoto."', '".$descricao."', '".$site."')";

    if(mysqli_query($con, $sql))
    {
        echo "Gravado com sucesso";
        move_uploaded_file($foto["tmp_name"], "../../img/".$nomedafoto);
    }
    else
    {

    }

    mysqli_close($con);

    ?>
    
</body>
</html>