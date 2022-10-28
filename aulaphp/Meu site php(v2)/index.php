<!DOCTYPE html>
<html lang="pt-br">

<head>

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="shortcut icon" href="IMG/favicon-32x32.png" type="image/x-icon">
  <link rel="stylesheet" href="CSS/style.css">

  <title>Grand Theft Auto V</title>



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

    </header>

    <main>

      <section id="conteiner">

        <div id="blococonteudo">

          <article id="conteudopri">

            <h1>Grand Theft Auto V</h1>

            <div class="blocoimg">

              <img src="IMG/gta_V_Chars.jpg" alt="">

            </div>

            <h3>Boas-vindas a Los Santos <?php if(isset($_SESSION["username"]))
            { 
           
            echo " : " . "Usuário " . $_SESSION["username"]; } ?> </h3>
            
            <p>Quando um tratante inexperiente, um ladrão de bancos aposentado e um psicopata aterrorizante se envolvem
              com algumas das figuras mais assustadoras e problemáticas do submundo do crime, do governo dos EUA e da
              indústria do entretenimento, eles precisam realizar uma série de golpes ousados para sobreviver em uma
              cidade implacável onde não podem confiar em ninguém, nem mesmo um no outro.</p>

            <p>Os jogadores poderão transferir o progresso do Modo História do GTAV e os personagens e progresso atuais
              do
              GTA Online para o PS5 e o Xbox Series X|S com uma migração única.</p>

            <div class="blocoimg">

              <img src="IMG/gta_V_Island.jpg" alt="">

            </div>

            <h3>Gráficos deslumbrantes</h3>

            <p>Melhorias nos níveis de fidelidade e desempenho, incluindo novos modos gráficos com resolução de até 4K e
              60 quadros por segundo, opções de HDR, raytracing, texturas aprimoradas e muito mais.</p>

            <div class="blocoimg">

              <img src="IMG/gta_V_Moto.jpg" alt="">

            </div>

            <h3>Carregamento mais rápido</h3>

            <p>Nunca foi tão rápido carregar o mundo de Los Santos e Blaine County, tendo acesso quase instantâneo à
              ação.
            </p>

            <div class="blocoimg">

              <img src="IMG/gta_V_Chars_2.jpg" alt="">

            </div>

            <h3>Controles imersivos</h3>

            <p>Sinta novos níveis de Resposta Tátil e resistência dinâmica através dos Gatilhos Adaptáveis no controle
              sem
              fio DualSense do PlayStation 5: de danos direcionais a efeitos climáticos, superfícies de estradas
              irregulares, explosões e muito mais.</p>

            <div class="blocoimg">

              <img src="IMG/gta_V_Helicopter.jpg" alt="">

            </div>

            <h3>Áudio 3D</h3>

            <p>Ouça os sons do mundo com o máximo de precisão: o ronco do acelerador de um supercarro roubado, os
              disparos
              de tiros nas proximidades, o ruído de um helicóptero sobrevoando e mais.</p>

          </article>

          <aside id="conteudoseg">

            <h2>Grand Theft Auto Online</h2>

            <div class="blocoimg">

              <img src="IMG/gta_V_Online.jpg" alt="">

            </div>

            <p style="padding-top: 10px;">Explore GTA Online, um universo online dinâmico em constante evolução para até
              30 jogadores, onde você
              começa como um malandro de rua e pode se tornar o rei do seu próprio império do crime.
              Aproveite novas melhorias de desempenho em veículos e aprimoramentos como a opção de escolher uma carreira
              criminal, bem como todas as atualizações de jogo, expansões e conteúdo adicionados desde o lançamento do
              GTA
              Online prontos para jogar a sós ou com amigos. Coopere para realizar Golpes ousados, entre em Corridas
              Acrobáticas cheias de adrenalina, dispute em Modos Adversários exclusivos ou passe um tempo socializando
              em
              boates, fliperamas, festas em coberturas, eventos de carros e muito mais.</p>

            <div class="blocoimg">

              <img src="IMG/gta_V_Car.jpg" alt="">

            </div>

            <h3>Novo conteúdo exclusivo</h3>

            <p>Passe na Hao’s Special Works no Evento de Carros de Los Santos, que oferece melhorias de elite e
              modificações exclusivas. Depois, acelere com esses veículos potentes em corridas HSW, novos Desafios
              Contra
              o Relógio e mais.</p>
          </aside>

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