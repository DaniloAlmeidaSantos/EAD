<?php
    session_start();

    if (isset($_GET['id'])) {
        $_SESSION['idDisc']         = $_GET['id'];
        $_SESSION['nomeMateria']    = $_GET['nome'];
        header('location: selecionarMateria.php');
    }

    if (isset($_GET['idTurma'])) {
        $_SESSION['idTurma']    = $_GET['idTurma'];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../design/css/mobile.css">
    <link rel="stylesheet" href="../design/css/normalize.css">
    <title>EAD - Selecionar Conteúdo</title>
</head>
<body>
    <nav>
        <div class="wrapperNav">
            <a href="../index.php" id="home"><span class="material-icons" id="home">arrow_back</span></a>
            <a href="#"><h1 class="contTitle">Escolha uma matéria:</h1></a>
        </div>

        <div class="containerSubject">
            <a href="?id=1&nome=Matemática">
                <div class="wrapperSubjetct">
                    <p>M</p>
                    <h1>Matemática</h1>
                </div>
            </a>

            <a href="?id=2&nome=Português">
                <div class="wrapperSubjetct">
                    <p>P</p>
                    <h1>Português</h1>
                </div>
            </a>

            <a href="?id=4&nome=História">
                <div class="wrapperSubjetct">
                    <p>H</p>
                    <h1>História</h1>
                </div>
            </a>

            <a href="?id=5&nome=Geografia">
                <div class="wrapperSubjetct">
                    <p>G</p>
                    <h1>Geografia</h1>
                </div>
            </a>

            <a href="?id=6&nome=Filosofia">
                <div class="wrapperSubjetct">
                    <p>F</p>
                    <h1>Filosofia</h1>
                </div>
            </a>

            <a href="?id=10&nome=Inglês">            
                <div class="wrapperSubjetct">
                    <p>I</p>
                    <h1>Inglês</h1>
                </div>
            </a>

            <a href="?id=9&nome=Química">
                <div class="wrapperSubjetct">
                    <p>Q</p>
                    <h1>Química</h1>
                </div>
            </a>

            <a href="?id=8&nome=Física">
                <div class="wrapperSubjetct">
                    <p>F</p>
                    <h1>Física</h1>
                </div>
            </a>

            <a href="?id=11&nome=Artes">
                <div class="wrapperSubjetct">
                    <p>A</p>
                    <h1>Artes</h1>
                </div>
            </a>
            <a href="?id=12&nome=Educação Física">
                <div class="wrapperSubjetct">
                    <p>ED</p>
                    <h1>Educação Física</h1>
                </div>
            </a>
        </div>
    </nav>
</body>
</html>