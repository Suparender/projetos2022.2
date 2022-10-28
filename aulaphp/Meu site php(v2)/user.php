<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="IMG/favicon-32x32.png" type="image/x-icon">
  <link rel="stylesheet" href="CSS/style.css">

  <title>Grand Theft Auto V - Login</title>


  
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

    <main>

      <section id="conteiner">

        <div id="blococonteudo">

          <h1>Login</h1>

          <div id="formulario">

            <form action="verificacao.php" method="post" autocomplete="off">

              <div id="usuario">

                <label for="username"><strong>Username : </strong></label>

                <input type="text" name="username" id="username" pattern="[A-Za-z]{3,12}" placeholder="username">

              </div>

              <div id="senha">

                <label for="password"><strong>Password : </strong></label>

                <input type="password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,15}" placeholder="password">

              </div>

              <input type="submit" id="logar" value="Logar">

            </form>
            <div id=naomenbro>
            <p class="textonaomenbro">Otherwise</p>
            <p class="textonaomenbro"><a href="cadastro.php"> Register Account</a></p>
            </div>
          </div>

        </div>

      </section>

    </main>

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