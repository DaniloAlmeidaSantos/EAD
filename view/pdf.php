<?php
    session_start();
    require_once '../source/Models/MostrarConteudo.php';
    $conteudo = new MostrarConteudo();
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
                $conteudo->getPdf($_GET['idAtt']);
            ?> 
        </div>

        <h1>PROCURE POR AULAS / ATIVIDADES: </h1>
        <div class="wrapperContent">
            <?php
                $conteudo->pdf($_SESSION['idMateria']);
            ?> 
        </div> 
        <br>
    </div>
</body>
</html>