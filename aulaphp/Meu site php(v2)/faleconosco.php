<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Fale Conosco</title>

  <link rel="shortcut icon" href="IMG/favicon-32x32.png" type="image/x-icon">
  <link rel="stylesheet" href="CSS/style.css">

  <title>Grand Theft Auto V</title>


  <style>
    p {
      font-size: 15px;
    }


    #formulario {
      margin: auto;
      margin-top: 5px;
      margin-left: 33px;
      width: 370px;
    }


    /*fieldset{
        background-color:#3f4e2e;
        }*/

    .txtarea {
      height: 25px;
      margin-bottom: 5px;
    }

    #boxmapacontato {

      width: 380px;
      height: auto;
      margin: auto;
      position: relative;
      margin-top: 40px;
      padding-bottom: 30px;
    }

    @media screen and (max-width:992px) and (min-width:668px) {

      #cabecalhocolado {
        height: 300px;

      }

      #cabecalho {
        display: block;
        width: 310px;
        float: right;

      }

    }

    @media screen and (max-width:667px) {
      #cabecalhocolado {
        padding: 0 5px;

      }

      #cabecalho {
        display: block;
        width: 75%;
        margin: auto;

      }

      #topo {
        display: block;
        width: 75%;
        margin: auto;

      }

      #blocologo {
        display: block;
        width: 75%;
        margin: auto;

      }

      #blocomenu {
        width: 100%;
        height: auto;
        text-align: none;
        margin: auto;

      }

      #menu {
        display: inline-block;
        float: none;

      }

      #blocorodape {
        display: inline-block;
        width: auto;
        float: none;

      }

      #form {
        display: block;
        width: 75%;
        margin: auto;

      }

    }

    @media screen and (max-width:457px) {
      #conteiner {
        padding-right: 0;

      }

      #form {
        display: block;
        width: 30%;
        margin: auto;

      }

      #input {
        display: block;
        padding: 15px;

      }

    }

    @media screen and (max-width:357px) {}
  </style>

  <script type="text/javascript">
    function validar(formulario) {
      if (formulario.nome.value == '') {
        alert("O campo nome é obrigatório.");
        return false;
      }
      if (formulario.email.value == '') {
        alert("O campo e-mail é obrigatório.");
        return false;
      }
      if (formulario.email.value.indexOf(('@' && '.'), 0) == -1) {
        alert("E-mail inválido.");
        return false;
      }
      if (formulario.mensagem.value == '') {
        alert("O campo mensagem é obrigatório.");
        return false;
      }
      if (formulario.mensagem.value.length < 10) {
        alert("A mensagem está muito curta.");
        return false;
      }
      return true;
    }
  </script>

</head>

<body>
  <?php
  include_once 'ativo.php'; 
  ?>

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
            <?php
            if(!isset($_SESSION["username"]))
            {
              ?>
            <a href="user.php">Usuário</a>
            <?php
            }
            if(!isset($_SESSION["username"]))
            {
              ?>
            <a href="adm.php">ADM</a>
            <?php
            }
            ?>
            <a href="faleconosco.php">Fale Conosco</a>
            <?php
            if(isset($_SESSION["username"]))
            { 
             ?>
              <a href="sair.php">Sair da sessão</a>
              <?php
            }
            ?>

          </nav>

        </div>

      </div>

      <main>

        <section id="conteiner">

          <div id="blococonteudo">

            <h1>Contate-nos!</h1>

            <div id="formulario">


              <form name="formulario" onsubmit="return validar(this);" action="enviar.html" method="post">

                <input type="hidden" name="destino" value="contato@senac.rj.br" />

                <input type="hidden" name="enviado" value="https://senac.rj.br/contatos.html" />


                <p style="font-size:18px;">Nome:</b><small>*</small><br />
                  <input name="nome" type="text" size="55" class="txtarea" placeholder="Nome Completo" />
                </p>
                <p style="font-size:18px;">E-mail:</b><small>*</small><br />
                  <input type="text" name="email" size="55" class="txtarea" placeholder="E-mail" />
                </p>
                <p style="font-size:18px;">Assunto:</b><br />
                  <input type="text" name="assunto" size="55" class="txtarea" placeholder="Assunto" />
                </p>
                <p style="font-size:18px;">Telefone:</b><br />
                  <input type="text" name="telefone" size="55" class="txtarea" placeholder="Telefone" />
                </p>
                <p style="font-size:18px;">Mensagem:</b><small>*</small></p>

                <textarea name="mensagem" cols="43" rows="10" wrap="virtual" placeholder=" Digite sua mensagem"></textarea>

              
              </form>



            </div>
            <!--formulario -->
            <input type="submit" id="logar" value="enviar" style= "font-size:16px;">
          </div>

        </section>

      </main>


</body>

</html>