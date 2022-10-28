<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <title>Consultando</title>

</head>

    <script>
    
    function confirmaExclusao(cod,nome){
        if(confirm('deseja realmente excluir o(a) cliente'+nome+'?'))
        { 
            location.href="phpexcluir-cliente.php?cod="+cod;
        }
    }


    </script>

<body>

    <div class="container">

        <h3>Consulta de cliente</h3>
        <form action="" method="get" autocomplete="off">

            <input type="text" name="nome" placeholder="nome">
            <input type="submit" value="pesquisar" class="btn">

        </form>

    </div>

    <?php

    if (isset($_GET['nome'])) {
        $nome = $_GET['nome'];
        //echo "O cliente digitado foi" . $nome;
        $con = mysqli_connect("localhost", "root", "", "cadastro1");
        $sql = "select * from cliente where nome like '" . $nome . "%'";
        $result = mysqli_query($con, $sql);

        // se o número encontrado é maior q zero
        if (mysqli_num_rows($result) > 0) {
            //echo "ok";
            ?>

            <table class="responsive-table">

                <tr>
                    <th>Nome</th>
                    <th>CPF</th>
                    <th>Editar</th>
                    <th>Excluir</th>
                    <?php
                    //enquanto
                    while ($row = mysqli_fetch_array($result)) {
                        ?>
                <tr>
                    <td><?php echo $row["nome"]; ?></td>
                    <td><?php echo $row["cpf"]; ?></td>
                    <td> <a href="phpeditar-cliente.php?cod=<?php echo $row["cod_cli"]; ?>"> <i class="material-icons">create</i> </a> </td>
                    <td> <a href="#" onclick="confirmaExclusao(<?php echo $row["cod_cli"]; ?>,'<?php echo $row["nome"]; ?>')"> <i class="material-icons">delete</i> </a></td>
                </tr>

            <?php 
        } //fim do loop
        ?>
            </tr>
            </table>
    <?php

        // fechando
    mysqli_close($con);

}
} else {
    echo "Nenhum cliente encontrado";
}

?>

</body>

</html>