i-0o<!DOCTYPE html>
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

                <div id="topo">date_create_immutable_from_formatfds

                    <span id="blgfhocologo">

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

        <main>


            <script>
                function confirmaExclusao(cod, nome) {
                    if (confirm('deseja realmente excluir o(a) cliente' + nome + '?')) {
                        location.href = "phpexcluir-cliente.php?cod=" + cod;
                    }
                }
            </script>

            <body>

                <section id="conteiner">
                    <div id="blococonteudo">

                        <h1>Consulta de cliente</h1>
                        <form action="" method=" get" autocomplete="off">

                            <input type="text" name="username" placeholder="Usuário" id="usuario">
                            <input type="submit" value="pesquisar" id="logar">
                        
                        </form>
                        <?php
                    include_once 'conexao.php';

                    if (isset($_GET['username'])) {
                        $username = $_GET['username'];
                        //echo "O cliente digitado foi" . $nome;

                        $sql = "select * from conta where username like '" . $username . "%'";
                        $result = mysqli_query($con, $sql);

                        // se o número encontrado é maior q zero
                        if (mysqli_num_rows($result) > 0) {
                            //echo "ok";
                    ?>

                            <div id="mesa">
                                <div id="tabua">
                                    <table>
                                        <tr>
                                            <th>Nome</th><p>
                                            <th>E-mail</th>
                                            <th>Editar</th>
                                            <th>Excluir</th>
                                            <?php
                                            //enquanto
                                            while ($row = mysqli_fetch_array($result)) {
                                            ?>
                                        <tr>
                                            <td><?php echo $row["username"]; ?></td>
                                            <td><?php echo $row["email"]; ?></td>
                                            <td> <a href="phpeditar-conta.php?cod=<?php echo $row["idconta"]; ?>"> Edit </a> </td>
                                            <td> <a href="phpexcluir-conta.php?cod=<?php echo $row["idconta"]; ?>"> Excluir </a> </a></td>
                                        </tr>
                                    <?php
                                            } //fim do loop
                                    ?>
                                    </tr>
                                    </table>
                                </div>
                            </div>

                    <?php

                            // fechando
                            mysqli_close($con);
                        }
                    } else {
                        $msg = "Nenhuma conta encontrada";
                        ?> <script> alert "<?php echo $msg; ?>"</script>
                        <?php
                    }

                    ?>
                    
                    <a href="sair.php" id="vasco"><input type="submit" value="   sair   " id="logar"></a>

                   <style>
                    #mesa{
                        display: block;
                        margin: auto;
                        padding: 10px;

                    }

                    #tabua {
                        display: block;
                        margin: auto;
                        max-width: 300px;

                    }

                    #vasco{
                        text-decoration: none;

                    }
                    
                    </style>

    </div>

    </section>

    </div>

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