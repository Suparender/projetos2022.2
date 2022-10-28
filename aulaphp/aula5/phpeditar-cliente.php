<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="stylesheet" href="materialize/css/materialize.min.css">

        <title></title>

    </head>
    <body>
        
        
        <?php 

        $cod = $_GET["cod"]; //resgatando o valor que veio pelo link

        $con = mysqli_connect("localhost", "root", "", "cadastro1");

        $sql = "select * from cliente where cod_cli = " . $cod;

        $result = mysqli_query($con, $sql);

        $row = mysqli_fetch_array($result);


        ?>
        
        
        <div class="container">
            
            <h3>Alteração de Cliente</h3>
            
            <form action="atualizar-cliente.php" method="post">
                
                <input type="hidden" name="cod"  value="<?php echo base64_encode($row["cod_cli"]); ?>">
                
                <div class="input-field">
                    <input value="<?php echo $row["nome"]; ?>" type="text" name="nome" id="nome" placeholder="Nome" pattern="[A-z À-ü]{3,50}" required autofocus minlength="3">
                </div>
                
                               
                <div class="input-field">
                    <input value="<?php echo $row["cpf"]; ?>" type="text" name="cpf" id="cpf"   placeholder="CPF" pattern="[0-9]{11}" title="Somente números" required maxlength="11">
                </div>
                 
            
               
                
                <input type="submit" value="Atualizar" class="btn">
                
            </form>
            
        </div>   
        
    </body>
</html>
