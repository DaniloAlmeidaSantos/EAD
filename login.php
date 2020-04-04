<?php
    session_start();
    require_once 'source/Models/Login.php';
    $conn = new Login();

    if (isset($_POST['btnAcessar'])) {
        $conn->acessar($_POST['txtEmail'], $_POST['txtSenha']);
    }
?>
<!DOCTYPE html>
<html lang="ptt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design/css/mobile.css">
    <link rel="stylesheet" href="design/css/tablet.css">
    <link rel="stylesheet" href="design/css/normalize.css">
    <title>EAD - Login</title>
</head>
<body>
    <nav>
        <div class="wrapperNav">
            <a href="index.php" id="home"><span class="material-icons" id="home">home</span></a>
            <a href="#"><h1>Login</h1></a>
        </div>
    </nav>

    <div class="containerLogin">
        <p>Olá Professor,</p>
        <p>Tenha uma Boa Tarde!</p>
    </div>

    <p style="color: red;">
        <?php 
            if (isset($_SESSION['error'])){
                echo $_SESSION['error'];
            }
        ?>
    </p>
    <section id="principal">
        <form action="" method="POST">
            <input type="text" name="txtEmail" placeholder="E-Mail" required>
            <input type="password" name="txtSenha" placeholder="Senha" required>
            <a href="#"><p>Esqueci minha senha</p></a>
            <button id="btnEntrar" name="btnAcessar">Entrar</button>
        </form>
    </section>
    <footer>
        <p>&copy; Copyrigth 2020 - Todos direitos reservados</p>
    </footer>
</body>
</html>