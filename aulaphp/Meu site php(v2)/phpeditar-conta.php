<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Painel de adiministrador</title>
    <link rel="stylesheet" href="CSS/style.css">
</head>

<body>

    <div id="cabecalhocolado">

        <header>

            <div id="cabecalho">

                <div id="topo">

                    <span id="blocologo">

                        <a href="index.html"><img src="IMG/gta_logo.png" alt="logo"></a>

                    </span>

                </div>

                <div id="blocomenu">

                    <nav id="menu">

                        <a href="index.php">Página Inicial</a>
                        <a href="user.php">Usuário</a>
                        <a href="adm.php">ADM</a>
                        <a href="faleconosco.php">Fale Conosco</a>

                    </nav>

                </div>

            </div>

        </header>

        
        
        <?php 

        $cod = $_GET["cod"]; //resgatando o valor que veio pelo link

        include_once 'conexao.php';

        $sql = "select * from conta where idconta = " . $cod;

        $result = mysqli_query($con, $sql);

        $row = mysqli_fetch_array($result);


        ?>
        
        
        <div>
        <section id="conteiner">
                    <div id="blococonteudo">
                    <div id="carlos">
            <h2>Alteração de Cliente</h2>
            

            <form action="atualizar-conta.php" method="post">
                
                <input type="hidden" name="cod"  value="<?php echo base64_encode($row["idconta"]); ?>">
                
                <div class="input-field">
                    <input value="<?php echo $row["username"]; ?>" type="text" name="username" id="username" placeholder="Nome" pattern="[A-z À-ü]{3,50}" required autofocus minlength="3" size="37%">
                </div>
                
                               
                <div class="input-field">
                    <input value="<?php echo $row["email"]; ?>" type="text" name="email" id="email"   placeholder="E-mail" required size="37%">
                </div>
</div>     
            
               
                
                <input type="submit" value="Atualizar" id="logar">
                
            </form>
                    </div>

        </div>   

    </div>

    </section>

    <style>
 
                    #carlos {
                        display: block;
                        margin: auto;
                        max-width: 300px;
                        /*background-color: pink;*/

                    }

                    #vasco{
                        text-decoration: none;

                    }
                    
                    </style>

    <footer id="rodape">

        <div id="blocorodape">

            <div id="blocoimgrodape">

                <img src="IMG/Rockstar_Games_Logo.png" alt="">

            </div>

            <div id="blocotextorodape">

                <h3>Rockstar Games</h3>

                <p>Rockstar Games, Inc. is an American video game publisher based in New York City. The company was established
                    in December 1998 as a subsidiary of Take-Two Interactive, using the assets Take-Two had previously acquired
                    from BMG Interactive. Founding members of the company were Terry Donovan, Gary Foreman, Dan and Sam Houser,
                    and Jamie King, who worked for Take-Two at the time, and of which the Houser brothers were previously
                    executives at BMG Interactive. Sam Houser heads the studio as president.</p>

                <div>

    </footer>

</body>

</html>