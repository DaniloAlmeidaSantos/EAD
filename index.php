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
        <a href="#">Opção 1</a>
        <a href="#">Opção 2</a>
        <a href="#">Opção 3</a>
        <a href="<?=$_SESSION['link']?>" id="link"><?=$_SESSION['login']?></a>
    </nav>

    <header>
        <h1>Paulino Nunes Esposo</h1>
        <h3>Plataforma EAD</h3>

        <p>
            Site em desenvolvimento...
        </p>
        <a href="#app" class="button">Pesquise a sua turma</a>
    </header>

    <section id="app">
        <div style="background-color:red;">
            <h3>Turma 1</h3>
        </div>

        <div style="background-color:red;">
            <h3>Turma 2</h3>
        </div>  

        <div style="background-color:red;">
            <h3>Turma 3</h3>
        </div>

        <div style="background-color:red;">
            <h3>Turma 4</h3>
        </div>
    </section>

    <footer>
        <p>&copy; Copyrigth 2020 - Todos direitos reservados</p>
    </footer>
</body>
</html>