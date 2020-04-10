<?php
    session_start();
    require_once 'source/Models/Login.php';

    $conn = new Login();

?>
<!DOCTYPE html>
<html>
<head>
    <title>EAD - Homepage</title>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700|Roboto+Slab:400,700|Pacifico' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="design/css/mobile.css">
    <link rel="stylesheet" href="design/css/normalize.css">
    <link rel="stylesheet" href="design/css/tablet.css">
</head>
<body>
    <nav>
        <div class="wrapperNav">
            <a href="#"><h1 style="display: inline-block;;">EAD</h1></a>
            <a href="<?=$_SESSION['link']?>" style="float: right; font-size: 20px;" id="link"><b><?=$_SESSION['login']?></b></a>
        </div>
    </nav>

    <header>
        <div class="imgheader"></div>
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
            <a href="view/selecionarDisciplina.php?idTurma=11">1° Série</a>
        </div>

        <div class="wrapper">
            <a href="view/selecionarDisciplina.php?idTurma=10">2° Série</a>
        </div>

        <div class="wrapper">
            <a href="view/selecionarDisciplina.php?idTurma=9">3° Série</a>
        </div>

        <div class="wrapper">
            <a href="view/selecionarDisciplina.php?idTurma=8">4° Série</a>
        </div>

        <div class="wrapper">
            <a href="view/selecionarDisciplina.php?idTurma=7">5° Série</a>
        </div>

        <div class="wrapper">
            <a href="view/selecionarDisciplina.php?idTurma=6">6° Série</a>
        </div>

        <div class="wrapper">
            <a href="view/selecionarDisciplina.php?idTurma=5">7° Série</a>
        </div>

        <div class="wrapper">
            <a href="view/selecionarDisciplina.php?idTurma=4">8° Série</a>
        </div>

        <div class="wrapper">
            <a href="view/selecionarDisciplina.php?idTurma=3">1° Grau</a>
        </div>

        <div class="wrapper">
            <a href="view/selecionarDisciplina.php?idTurma=2">2° Grau</a>
        </div>

        <div class="wrapper">
            <a href="view/selecionarDisciplina.php?idTurma=1">3° Grau</a>
        </div>

        <div class="wrapper">
           <a href="#"> outro</a>
        </div>
    </div>

    <!-- <footer>
        &copy; Copyrigth 2020 - Todos direitos reservados
    </footer> -->
</body>
</html>