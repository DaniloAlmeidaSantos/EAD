<?php
    session_start();
    require_once '../source/Models/Files.php';

    $conn   = new Files();
    $array  = $_SESSION['preUpload'];

    if (isset($_POST['btnTexto'])) {
        if ($conn->arquivoTexto($array['disciplinas'], $array['titulo'], $array['descDisciplina'], $array['idProfessor'], $_SESSION['idMateria'])) {
            header('location: preUpload.php?voltar=true');
        } else {
            echo $_SESSION['error'];
        } 
    } elseif (isset($_POST['btnVideo'])) {
        if ($conn->videoAula($array['disciplinas'], $array['titulo'], $array['descDisciplina'], $array['idProfessor'], $_SESSION['idMateria'])){
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
    <link rel="stylesheet" href="../design/css/index.css">
    <link rel="stylesheet" href="../design/css/normalize.css">
    <title>EAD - Upload</title>
</head>
<body>
    <nav>
        <div class="wrapperNav">
            <a href="preUpload.php" id="home"><span class="material-icons" id="home">arrow_back</span></a>
            <a href="#"><h1 class="preupTitle">Preencha as informações</h1></a>
        </div>
    </nav>

    <div class="containerLogin">
        <h5>Enviar arquivos das aulas</h5>
    </div>

    <section id="containerUpload">
        <p style="color: red;">
            <?php 
                if (isset($_SESSION['error'])){
                    echo $_SESSION['error'];
                }
            ?>
        </p>
        
        <label for="tipo">Qual o tipo de material</label>
        <select name="material" id="tipo" style="display: block;">
            <option value="Texto">Texto</option>
            <option value="Video">Vídeo</option>
        </select>

        <form action="" method="post" enctype="multipart/form-data"> 
            <br>
            <input type="file" name="file" style="color: black;">
            <br><br><br><br><br>
            <button id="btnEntrar">Upload</button>
        </form>
    </section>
    <footer><p>&copy; Copyrigth 2020 - Todos direitos reservados</p></footer>
    <script src="../source/js/upload.js"></script>
</body>
</html>