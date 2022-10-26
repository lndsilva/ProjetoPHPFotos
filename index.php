<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Salvando fotos - PHP</title>
</head>
<body>

    <form action="gravar.php" method="POST" enctype="multipart/form-data">

        <label for="imagem">Imagem:</label>
        
        <input type="file" name="imagem"/>
        
        <br/>
        
        <input type="submit" value="Enviar"/>
    
    </form>

</body>
</html>