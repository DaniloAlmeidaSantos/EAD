<?php
    
?>
<!DOCTYPE html>
<html lang="ptt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design/css/mobile.css">
    <link rel="stylesheet" href="design/css/normalize.css">
    <link rel="stylesheet" href="design/css/tablet.css">
    <title>EAD</title>
</head>
<body>
    <nav>
        <div class="wrapperNav">
            <a href="index.php" id="home"><span class="material-icons" id="home">home</span></a>
            <a href="#"><h1>Geografia</h1></a>
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
        <div class="wrapperMateria">
            <a href="">
                <button>nome da materia</button>
            </a>
        </div>

        <div class="wrapperMateria">
            <a href="">
                <button>nome da materia</button>
            </a>
        </div>
    </div>
</body>
</html>