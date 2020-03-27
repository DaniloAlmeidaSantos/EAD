<?php
    session_start();
    require_once 'source/Models/Login.php';
    //require_once 'source/Models/Turmas.php';

    $conn = new Login();
    //$turmas = new Turmas();

?>
<!DOCTYPE html>
<html>
<head>
    <title>EAD - Homepage</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Slab:400,700|Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="design/css/index.css">
    <link rel="stylesheet" href="design/css/normalize.css">
</head>
<body>
    <nav>
        <div class="wrapperNav">
            <a href="#"><h1>EAD</h1></a>
            <a href="<?=$_SESSION['link']?>" id="link"><?=$_SESSION['login']?></a>
        </div>
    </nav>

    <header>
        <div class="backgroundBlack"></div>
        <div class="wrapperHeader">
            <h1>EAD</h1>
            <h3>Sistema para auxílio educacional dos estudantes perante à querentena.</h3>
            <p>
                É professor ? <a href="login.php">Entre aqui</a>
            </p>
        </div>
    </header>

    <div class="container">
        <div class="wrapper">
            1° Série
        </div>

        <div class="wrapper">
            2° Série
        </div>

        <div class="wrapper">
            3° Série
        </div>

        <div class="wrapper">
            4° Série
        </div>

        <div class="wrapper">
            5° Série
        </div>

        <div class="wrapper">
            6° Série
        </div>

        <div class="wrapper">
            7° Série
        </div>

        <div class="wrapper">
            8° Série
        </div>

        <div class="wrapper">
            1° Grau
        </div>

        <div class="wrapper">
            2° Grau
        </div>

        <div class="wrapper">
            3° Grau
        </div>

        <div class="wrapper">
            outro
        </div>
    </div>

    <!-- <footer>
        &copy; Copyrigth 2020 - Todos direitos reservados
    </footer> -->
</body>
</html>