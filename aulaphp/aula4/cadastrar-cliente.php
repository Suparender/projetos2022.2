<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de cliente</title>
    <link rel="stylesheet" href="materialize/css/materialize.min.css">
</head>

<body>

    <div class="container">
        <h3>Cadastro de clientes</h3>
        <form action="gravar-cliente.php" method="post">

            <div>
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" pattern="[A-z À-u] {3,50}" requeried autofocus minlength="3">
                
            </div>

            <div>
                <label for="email">E-mail</label>
                <input type="text" name="email" id="email" requered>
            </div>

            <div>
                <label for="cpf">CPF</label>
                <input type="number" name="cpf" id="cpf"  pattern="[0-9] {11}" title="somente números" required autofocus maxlength="11">
            </div>

            <div>
                <p>

                    <label>
                        <input type="radio" name="sexo" value="M" requered>
                        <span>Masculino</span>
                    </label>

                </p>
            </div>

            <div>
                <p>

                    <label>
                        <input type="radio" name="sexo" value="F" requered>
                        <span>Feminino</span>
                    </label>

                </p>
                <input type="submit" value="Cadastrar" class="btn">
            </div>

        </form>
    </div>
    <script scr="materialize/js/materialize.min.js"></script>
</body>

</html>