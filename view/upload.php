<?php
    session_start();
    require_once '../source/Models/Files.php';

    $conn   = new Files();
    $array  = $_SESSION['preUpload'];

    if (isset($_POST['btnTexto'])) {
        if ($conn->arquivoTexto($array['disciplinas'], $array['titulo'], $array['descDisciplina'])) {
            header('location: preUpload.php?voltar=true');
        } else {
            echo $_SESSION['error'];
        }
    } elseif (isset($_POST['btnVideo'])) {
        if ($conn->videoAula($array['disciplinas'], $array['titulo'], $array['descDisciplina'])){
            header('location: preUpload.php?voltar=true');
        } else {
            echo $_SESSION['error'];;
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EAD - Upload</title>
</head>
<body>
    <h1>Enviar arquivos para as aulas</h1>
    <h4>
        <?php
            if (isset($_SESSION['error'])) {
                echo $_SESSION['error'];
            }
        ?>
    </h4>
    <section>
        <label>Qual o tipo de material</label>
        <select name="material" id="select">
            <option value="Texto">Texto</option>
            <option value="Video">Vídeo</option>
        </select>
        <form action="" method="post" id="frmFile" enctype="multipart/form-data"> 
            <input type="file" id="inputFile" name="file">
            <button id="btnUpload">Upload</button>
        </form>
    </section>
    <footer><p>&copy; Copyrigth 2020 - Todos direitos reservados</p></footer>
    <script src="../source/js/upload.js"></script>
</body>
</html>