<?php
    session_start();
    // $_SESSION['idConteudoTurma'] = $_GET['idTurma'];
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EAD - Selecionar conteúdo</title>
</head>
<body>
    <h1>Escolha o tipo de conteúdo</h1>
    <section id="principal">
        <div id="texto" style="width: 45%;display: inline-block;">
            <img src="../files/images/book.jpg" width="45%">
            <h2>Textos</h2>
        </div>
        <div id="video" style="width: 45%;display: inline-block;">
            <img src="../files/images/book.jpg" width="45%">
            <h2>Videos</h2>
        </div>
    </section>

    <section id="app">
        <select id="select">
            <option value="1">Matemática</option>
            <option value="2">Português</option>
            <option value="3">Sociologia</option>
            <option value="4">História</option>
            <option value="5">Geografia</option>
            <option value="6">Filosofia</option>
            <option value="7">Ed. Física</option>
            <option value="8">Física</option>
            <option value="9">Química</option>
            <option value="7">Infomática</option>
        </select>
        <a name="pesquisa" id="pesquisar">Pesquisar</a>

        <div id="resultados">
            <?php
                if (isset($_GET['pesquisa'])) {
                    
                }
            ?>
        </div>
    </section>

    <footer><p>&copy; Copyrigth 2020 - Todos direitos reservados</p></footer>
    <script src="../source/js/conteudo.js"></script>
</body>
</html>