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

    <div class="containerReproducao">
        <div class="wrapperVideo">
        <!-- coloque o video nessa div -->
        </div>
        <h1>Estrutura de repetição: for dhsakjjdksha dhskaj</h1>
        <div class="wrapperContent">
            <div class="Squarefile">
                <div class="fileName">Exemplo da aulaExemplo da aula</div>
            </div>

            <div class="Squarefile">
                <div class="fileName">Exemplo da aula</div>
            </div>

            <div class="Squarefile">
                <div class="fileName">Exemplo da aula</div>
            </div>
        </div>
        
    </div>
</body>
</html>