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
    <title>EAD - Login</title>
</head>
<body>
    <h1>Login</h1>
    <h3>O login é exclusivo aos professores</h3>
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
            <button name="btnAcessar">Acessar</button>
        </form>
    </section>
    <footer>
        <p>&copy; Copyrigth 2020 - Todos direitos reservados</p>
    </footer>
</body>
</html>