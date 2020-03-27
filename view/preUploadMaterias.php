<?php
    session_start();
    require_once '../source/Models/Materias.php';
    $materia = new Materias();

    if (isset($_POST['btnPesquisa'])) {
        $_SESSION['txtNomeMateria'] = $_POST['txtNomeMatéria'];
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
        echo $_SESSION['texto'] . '-' . $_SESSION['idProfessor'];
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="../libs/js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="../libs/js/jquery.form.js"></script>
    <title>EAD - Selecionar Matéria</title>
</head>
<body>
    <h1>Selecione ou cadastre matérias</h1>
    <h3>Escolha uma playlist de matérias para enviar suas aulas.</h3>
    <section id="materia">
        <fieldset> 
            <legend>Informações da matéria</legend>
            <form action="" method="POST">
                <?php if (isset($_GET['cadastrar'])): ?>
                    <input type="text" name="txtNomeMateria" value="<?php if (isset($_SESSION['texto'])) { echo $_SESSION['texto'];} ?>" placeholder="Nome da matéria*..." required><br><br>
                    <textarea name="txtDescMateria" cols="30" rows="10" maxlength="160" placeholder="Descrição da matéria(opcional)...."></textarea>
                    
                    <p>Quer pesquisar novamente? <a href="?pesquisa">Clique aqui!</a></p>
                    
                    <button name='btnCadastro'>Prosseguir</button>
                <?php elseif (isset($_GET['pesquisa'])): ?>
                    <h2>Pesquise por uma matéria já existente</h2>
                    <input type="text" name="txtNomeMateria" autocomplete="false" id="txtPesquisar" placeholder="Nome da matéria*..." required><br>

                    <p>Quer adicionar uma nova matéria? <a href="?cadastrar">Clique aqui!</a></p>

                    <div id="resultado"></div> <br>

                    <button name='btnPesquisa'>Prosseguir</button>
                <?php elseif (isset($_GET['texto'])): ?>
                    <h2>Pesquise por uma matéria já existente</h2>
                    <input type="text" name="txtNomeMateria" value="<?=$_GET['texto']?>" id="txtPesquisar" placeholder="Nome da matéria*..." required><br>

                    <p>Quer adicionar uma nova matéria? <a href="?cadastrar">Clique aqui!</a></p>

                    <div id="resultado"></div> <br>

                    <button name='btnPesquisa'>Prosseguir</button>
                <?php endif;?>
                
            </form>
        </fieldset>
    </section>
    <script src="../source/ajax/pesquisaMaterias.js"></script>
</body>
</html>