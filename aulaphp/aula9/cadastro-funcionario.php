<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <no>
        <meta http-equiv="reflesh" content="0;semjavat.php">
    </no>
</head>
<body>
    <div class="container">
        <h3>Cadastro de Funcionários</h3>
        <form action="gravar-funcionario.php" method="post" autocomplete="off">
            <input type="text" name="nome" placeholder="Nome do funcionário" class="required">
            <input type="text" name="email" id="Email" placeholder="E-Mail" class="required email">
            <input type="text" name="dtnasc" class="required dateBR" id="dtnasc" 
            placeholder="Data de Nascimento" >
            <input type="text" name="cpf" id="cpf" class="required" placeholder="Cpf">
            
            <select name="cargo">
                    <!--<option value="1">Programador</option>-->
                    
                    <?php 
                        include_once 'conexao.php';
                        $sql = "select * from cargo order by nomecargo";
                        
                        $result = mysqli_query($con, $sql);
                        
                        if(mysqli_num_rows($result) > 0){
                            
                            while($row = mysqli_fetch_array($result)){
                                ?>
                                <option value="<?php echo $row["idcargo"]; ?>"><?php echo $row["nomecargo"]; ?></option>
                                <?php
                            }
                            
                        }
                        
                    ?>
                    
                </select>
            
            <br>
            <!-- o meu button esta baixo-->
            <input type="submit" value="Cadastrar" class="btn">

                
        </form>

    </div>
    <!--- chamar os elementos da pasta JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="materialize/js/materialize.min.js"></script>
        <script src="js/maskedinput-1.4.1.js"></script>
        <script src="js/jquery.validate.js"></script>
        
        <script>
            $(document).ready(function () {
                $('select').formSelect();                
                $("#dtnasc").mask("99/99/9999");
                $("#cpf").mask("999.999.999-99");                
                $("form").validate();
                
                
                //ao sair do campo cpf
                $("#cpf").blur(function(){
                    //alert('ok');
                    
                    var cpfdigitado = $("#cpf").val();
                    
                    $.post("consulta-cpf.php",
                          {cpfdigitado:cpfdigitado},
                          function(respostacpf){
                              $("#respostacpf").html(respostacpf);
                          });
                    
                });
                
                
            });            
        </script>

</body>
</html>