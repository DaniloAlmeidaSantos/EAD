<?php
    session_start();
    require_once '../source/Models/Materias.php';
    $materia = new Materias();
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
            <a href="index.php" id="home"><span class="material-icons" id="home">home</span></a>
            <a href="#"><h1><?=$_SESSION['nomeMateria'];?></h1></a>
        </div>
    </nav>

    <div class="containerMateria">
        <p>Escolha uma matéria:</p>
    </div>

    <p style="color: red;">
        <?php 
            if (isset($_SESSION['error'])){
                echo $_SESSION['error'];
            }
        ?>
    </p>
    <div class="containerMateria">
        <?php
            $materia->getMaterias($_SESSION['idDisc'], $_SESSION['idTurma']);
        ?>
    </div>
</body>
</html>