<?php
    session_start();
    require_once '../source/Models/Materias.php';
    $materia = new Materias();

    if (isset($_POST['btnPesquisa'])) {
        $_SESSION['txtNomeMateria'] = $_POST['txtNomeMateria'];
        $_SESSION['txtDescMateria'] =  '';

        header('location: ../source/includes/upload.php?pesquisa=true');
    } elseif (isset($_POST['btnCadastro'])) {
        $_SESSION['txtNomeMateria'] = $_POST['txtNomeMateria'];
        $_SESSION['txtDescMateria'] = $_POST['txtDescMateria'];

        header('location: ../source/includes/upload.php?cadastro=true');
    }

    if (isset($_POST['btnProsseguir'])) {
        $_SESSION['txtTitulo']          = $_POST['txtTitulo'];
        $_SESSION['selectDisciplina']   = $_POST['selectDisciplina'];
        $_SESSION['txtDescDisciplina']  = $_POST['txtDescDisciplina'];
        $_SESSION['selectSerie']        = $_POST['selectSerie'];   
    }

    if (isset($_GET['texto'])){
        $_SESSION['texto']          = $_GET['texto'];
        $_SESSION['idProfessor']    = $_GET['id'];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../design/css/index.css">
    <link rel="stylesheet" href="../design/css/normalize.css">
    <script type="text/javascript" src="../libs/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../libs/js/jquery.form.js"></script>
    <title>EAD - Selecionar Matéria</title>
</head>
<body>
    <nav>
        <div class="wrapperNav">
            <a href="index.php" id="home"><span class="material-icons" id="home">arrow_back</span></a>
            <a href="#"><h1 class="preupTitle">Preencha as informações</h1></a>
            
        </div>
    </nav>

    <div class="containerLogin">
        <h5>Informações da matéria</h5>
        <h6>Pesquise uma matéria ja existente ou crie sua própria playlist de atividades.</h6>
    </div>
    
    <section>
        <form action="" method="POST" id="containerUpload">
            <?php if (isset($_GET['cadastrar'])): ?>
                <input type="text" name="txtNomeMateria" value="<?php if (isset($_SESSION['texto'])) { echo $_SESSION['texto'];} ?>" placeholder="Nome da matéria" required><br><br>
                <textarea name="txtDescMateria" cols="30" rows="10" maxlength="160" placeholder="Descrição da matéria (opcional)"></textarea>
                
                <p>Quer pesquisar novamente? <a href="?pesquisa">Clique aqui!</a></p>
                
                <button name='btnCadastro'>Prosseguir</button>
            <?php elseif (isset($_GET['pesquisa'])): ?>
                <input type="text" name="txtNomeMateria" id="txtPesquisar" placeholder="Pesquise pelo nome da matéria" required><br>

                <p>Quer adicionar uma nova matéria? <a href="?cadastrar">Clique aqui!</a></p>

                <div id="resultado"></div> <br>

                <button name='btnPesquisa'>Prosseguir</button>
            <?php elseif (isset($_GET['texto'])): ?>
                <input type="text" name="txtNomeMateria" value="<?=$_GET['texto']?>" id="txtPesquisar" placeholder="Pesquise pelo nome da matéria" required><br>

                <p>Quer adicionar uma nova matéria? <a href="?cadastrar">Clique aqui!</a></p>

                <div id="resultado" ></div> <br>

                <button name='btnPesquisa'>Prosseguir</button>
            <?php endif;?>
            
        </form>
    </section>
    <script src="../source/ajax/pesquisaMaterias.js"></script>
</body>
</html>