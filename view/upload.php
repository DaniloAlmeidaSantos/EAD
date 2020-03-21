<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Enviar arquivos para as aulas</h1>
    <section>
        <label>Qual o tipo de material</label>
        <select name="material" id="select">
            <option value="Texto">Texto</option>
            <option value="Video">Vídeo</option>
        </select>
        <form action="teste.php" method="post" id="frmFile" enctype="multipart/form-data"> 
            <input type="file" id="inputFile">
            <button id="btnUpload">Upload</button>
        </form>
    </section>
    <footer><p>&copy; Copyrigth 2020 - Todos direitos reservados</p></footer>
    <script src="../design/js/upload.js"></script>
</body>
</html>