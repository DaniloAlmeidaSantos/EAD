<?php
    
?>
<!DOCTYPE html>
<html lang="ptt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design/css/index.css">
    <link rel="stylesheet" href="design/css/normalize.css">
    <title>EAD - Upload</title>
</head>
<body>
    <nav>
        <div class="wrapperNav">
            <a href="preUpload.php" id="home"><span class="material-icons" id="home">arrow_back</span></a>
            <a href="#"><h1 class="preupTitle">Preencha as informações</h1></a>
            <!-- <a href="<?=$_SESSION['link']?>" id="link"><?=$_SESSION['login']?></a> -->
        </div>
    </nav>

    <div class="containerLogin">
        <h5>Enviar arquivos das aulas</h5>
    </div>

    <p style="color: red;">
        <?php 
            if (isset($_SESSION['error'])){
                echo $_SESSION['error'];
            }
        ?>
    </p>
    <section id="">
        <form action="" method="POST" id="containerUpload">
            <br>
            <label for="tipo">Qual o tipo de material?</label>
            <select name="serie" id="tipo" style="display: block;">
                <option value="Vídeo">Vídeo</option>
                <option value="Arquivo">Arquivo</option>
            </select>
            <br>
            <input type="file" style="color: black;">
            <br><br><br><br><br>
            <button id="btnEntrar" name="btnAcessar">Upload</button>
        </form>
    </section>
    <br>
</body>
</html>