<?php
    session_start();
    require_once '../source/Models/MostrarConteudo.php';
    $conteudo = new MostrarConteudo();

    if (isset($_GET['id'])) {
        $_SESSION['total'] = count($_SESSION['track']);
        for ($i=0; $_SESSION['total'] >= $i; $i++ ) {
            if (isset($_SESSION['track'][$i])){
                if ($_SESSION['track'][$i] == $_GET['id']) {
                    $_SESSION['cont'] = $i;
                } 
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../design/css/mobile.css">
    <link rel="stylesheet" href="../design/css/normalize.css">
    <title>EAD</title>
</head>
<body>
    <nav>
        <div class="wrapperNav">
            <a href="../index.php" id="home"><span class="material-icons" id="home">home</span></a>
            <a href="#"><h1><?=$_SESSION['nomeMateria'];?></h1></a>
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
            <?php
                $conteudo->video();
            ?>
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

            <div class="Squarefile">
                <div class="fileName">Exemplo da aula</div>
            </div>
        </div> 
    </div>
</body>
</html>