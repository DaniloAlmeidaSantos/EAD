<?php
    session_start();
    require_once '../source/Models/Materias.php';
    $conn = new Materias();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EAD - Upload</title>
</head>
<body>
    <h1>Escolha a matéria no qual será enviada as aulas</h1>
    <h4 id="error" style="color: red;">
        <?php
            if (isset($_SESSION['error'])) {
                echo $_SESSION['error'];
            }
        ?>
    </h4>
    <form action="" method="post">
        <select name="select">
            <?php
                $conn->getId();  
            ?>
        </select>
    </form>
    <footer></footer>
</body>
</html>