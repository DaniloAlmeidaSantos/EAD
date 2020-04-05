<?php
    session_start();
    require_once '../source/Models/Conteudo.php';
    $conteudo = new Conteudo();

    if (isset($_GET['id'])) {
        $_SESSION['id'] = $_GET['id'];
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
                echo  $_SESSION['error'];
            }
        ?>
    </p>
    <div class="container">
        <label> Buscar tipos de conteúdo: 
            <select id="serie" onclick="getContent();" style="display: block;">
                <option value="texto">Buscar por arquivos de texto</option>
                <option value="video">Buscar por arquivos de video</option>
            </select>
            <br>
            <a href="?getTexto" id="link" class="btn btn-sucess">Buscar por conteúdo</a>
        </label>
        <div class="containerVideo">
            <?php 
                if (isset($_GET['getTexto'])){
                    $conteudo->getConteudoAtividade($_SESSION['idTurma'], $_SESSION['id']);
                } elseif (isset($_GET['getVideo'])) {
                    $conteudo->getConteudoVideo($_SESSION['idTurma'], $_SESSION['id']);
                }
            ?>
        </div>
    </div>
    
</body>
</html>
<script src="../source/js/escolhaConteudo.js"></script>