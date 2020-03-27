<?php
    
?>
<!DOCTYPE html>
<html lang="ptt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="design/css/index.css">
    <link rel="stylesheet" href="design/css/normalize.css">
    <title>EAD - Upload</title>
</head>
<body>
    <nav>
        <div class="wrapperNav">
            <a href="index.php" id="home"><span class="material-icons" id="home">arrow_back</span></a>
            <a href="#"><h1 class="preupTitle">Preencha as informações</h1></a>
            <!-- <a href="<?=$_SESSION['link']?>" id="link"><?=$_SESSION['login']?></a> -->
        </div>
    </nav>

    <div class="containerLogin">
        <h5>Informações da atividade | aula</h5>
    </div>

    <p style="color: red;">
        <?php 
            if (isset($_SESSION['error'])){
                echo $_SESSION['error'];
            }
        ?>
    </p>
    <section id="">
        <form action="" method="POST" id="containerUpload">
            <input type="text" name="Nome da Atividade" placeholder="Nome da Atividade" required>
            <input type="text" name="Disciplina" placeholder="Disciplina" required>
            <br>
            <select name="serie" id="serie" style="display: block;">
                <option value="1° Série">1° Série</option>
                <option value="2° Série">2° Série</option>
                <option value="3° Série">3° Série</option>
                <option value="4° Série">4° Série</option>
                <option value="5° Série">5° Série</option>
                <option value="5° Série">6° Série</option>
                <option value="6° Série">7° Série</option>
                <option value="6° Série">8° Série</option>
                <option value="6° Série">9° Série</option>
                <option value="6° Série">1° grau</option>
                <option value="6° Série">2° grau</option>
                <option value="6° Série">3° grau</option>
            </select>
            <br>
            <textarea name="" id="" cols="30" rows="50" placeholder="Descrição da atividade (opcional)" maxlength="200"></textarea>
            <br><br>
            <input type="text" name="nomeMateria" placeholder="Nome da matéria" required>
            <br><br>
            <textarea name="" id="" cols="30" rows="50" placeholder="Descrição da matéria (opcional)" maxlength="200"></textarea>
            <br><br>
            <button id="btnEntrar" name="btnAcessar">Prosseguir</button>
        </form>
    </section>
    <br>
</body>
</html>