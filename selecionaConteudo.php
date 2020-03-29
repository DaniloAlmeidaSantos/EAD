<?php
    
?>
<!DOCTYPE html>
<html lang="ptt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design/css/index.css">
    <link rel="stylesheet" href="design/css/normalize.css">
    <title>EAD</title>
</head>
<body>
    <nav>
        <div class="wrapperNav">
            <a href="index.php" id="home"><span class="material-icons" id="home">home</span></a>
            <a href="#"><h1>Geografia</h1></a>
        </div>
    </nav>

    <p style="color: red;">
        <?php 
            if (isset($_SESSION['error'])){
                echo $_SESSION['error'];
            }
        ?>
    </p>

    <div class="containerVideo">
        <div class="wrapperImgVideo">
            <a href=""><img src="" alt=""></a>

            <div class="titleVideo">
                <div class="innerTitleImg">
                    <img src="" alt="">
                </div>
                <div class="innerTitle">
                    <h2>Aula2: algaritmo</h2>
                    <h3>Por: Fulano</h3>
                </div>
            </div>
        </div>
    </div>
</body>
</html>