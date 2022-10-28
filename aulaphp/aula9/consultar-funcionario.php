<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>consultando</title>
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
</head>
<body>

    <div class="container">
        <h3> --- Consulta de funcionários --- </h3>
        <!--o form n vai enviar dados-->

        <form autocomplete="off">
            <input type="text" id="nome" placeholder="Digite um nome para a pesquisa">
            <input type="submit" class="btn">
        </form>
        <div id="conteudo">

        

        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
        $(document).ready(function()
        {
            //ao soltar uma tecla no campo id "nome"
            $("#nome").keyup(function() {
                var nomedigitado = $("#nome").val();

                $.post("busca.php", 
                {nomedigitado:nomedigitado}, 
                function(RESPOSTA) {
                    $("#conteudo").html(resposta);d
                })
            })
        });
    </script>

</body>
</html>