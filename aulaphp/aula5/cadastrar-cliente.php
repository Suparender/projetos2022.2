<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="materialize/css/materialize.min.css">

    <title>Cadastrar</title>

</head>
<body>

<div class="container">
    <h2>Cadastro de cliente</h2>

    <form action="gravar-cliente.php" method="post">

    <p>
    <div class="input-field">
        <input type="text" name="nome" id="nome" placeholder="Nome">
    </div>
    </p>

    <p>
    <div class="input-field">
        <input type="text" name="cpf" id="cpf" placeholder="CPF">
    </div>
    </p>
    
    <input type="submit" value="cadastrar" class="btn">

    </form>

</div>
    
</body>
</html>