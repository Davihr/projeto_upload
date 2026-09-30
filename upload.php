<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enviar Imagem</title>
</head>
<body>
    <header>
        <h1>Enviar Imagem</h1>
    </header>
    <form action="processo_upload.php" method="post" enctype="multipart/form-data">
        <label>Selecione a imagem:</label><br><br>
        <input type="file" name="arquivo" required><br><br>
        <button type="submit">Enviar</button>
    </form>
    <br>
    <a href="index.php"><--Voltar para galeria</a>
</body>
</html>