<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/materialize.min.css">
    <script src="../tinymce/tinymce.min.js"></script>
        <script>tinymce.init({
                selector: 'textarea',
                height: 180,
                menubar: false,
                plugins: [
                    'advlist autolink lists link image charmap print preview anchor textcolor',
                    'searchreplace visualblocks code fullscreen',
                    'insertdatetime media table contextmenu paste code help wordcount'
                ],
                toolbar: 'undo redo |  formatselect | bold italic backcolor  | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
                content_css: [
                    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
                    '//www.tinymce.com/css/codepen.min.css']
            });</script>
</head>
<body>

<div class="container">
    <h3>Cadastrar evento</h3>
    <form action="gravar-evento.php" method="post" enctype="multipart/form-data">
        <input type="text" name="titulo" placeholder="Título do evento" required>
        <input type="date" name="dtevento" required>
        <input type="file" name="foto" required>
        <p>Descrição do evento</p>
        <textarea name="descricao"></textarea>
        <input type="url" name="site" placeholder="http://site.com.br">
        <input type="submit" value="Cadastrar" class="btn">
    </form>
</div>
    
</body>
</html>