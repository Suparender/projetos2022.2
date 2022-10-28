<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
</head>

<body>

    <div class="container">
        <h3>Cadastro de cargo</h3>
        <form>
            <input type="text" id="nomecargo" placeholder="Nome do Cargo">
            <input type="text" id="salario" placeholder="Salário">

            <input type="button" id="cadastrar" class="btn" value="Cadastrar">
        </form>

        <p id="mensagem"></p>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/jquery.maskMoney.js"></script>

    <script>
        $(document).ready(function() {
            $("#salario").maskMoney({
                prefix: 'R$ ',
                allowNegative: true,
                thousands: '.',
                decimal: ',',
                affixesStay: false
            });


            $("#cadastrar").click(function() {
                var nomecargo = $("#nomecargo").val();
                var salario = $("#salario").val();

                $.post("gravar-cargo.php", {
                        nomecargo: nomecargo,
                        salario: salario
                    },
                    function(resposta) {
                        $("#mensagem").html(resposta);
                    });

            });

        });
    </script>

</body>

</html>