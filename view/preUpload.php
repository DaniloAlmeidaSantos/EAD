<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../design/css/mobile.css">
    <link rel="stylesheet" href="../design/css/normalize.css">
    <title>EAD - Upload</title>
</head>
<body>
    <nav>
        <div class="wrapperNav">
            <a href="../index.php" id="home"><span class="material-icons" id="home">arrow_back</span></a>
            <a href="#"><h1 class="preupTitle">Preencha as informações</h1></a>
            
        </div>
    </nav>

    <div class="containerLogin">
        <h5>Informações da aula</h5>
    </div>

    
    <section id="containerUpload">
        <p style="color: red;">
            <?php 
                if (isset($_SESSION['error'])){
                    echo "<h3>" . $_SESSION['error'] . "</h3>";
                }
            ?>
        </p>
        <p style="color: green;">
            <?php 
                if (isset($_GET['voltar'])) {
                    echo "<b>Aula enviada com sucesso!!</b> Se sinta a vontade para enviar novas aulas ou  <a href='../index.php'> volte ao início </a>.";
                }
            ?>
        </p>
        <form action="preUploadMaterias.php?pesquisa" method="POST">
            <input type="text" name="txtTitulo" placeholder="Nome da Atividade / aula" required>
            <br>
            <label>Selecione a série correspondente com conteúdo: </label>
            <select name="selectSerie" id="serie" style="display: block;">
                <option value="1">3º ANO - ENSINO MÉDIO</option>
                <option value="2">2º ANO - ENSINO MÉDIO</option>
                <option value="3">1º ANO - ENSINO MÉDIO</option>
                <option value="4">8º SÉRIE - ENSINO FUNDAMENTAL</option>
                <option value="5">7º SÉRIE - ENSINO FUNDAMENTAL</option>
                <option value="6">6º SÉRIE - ENSINO FUNDAMENTAL</option>
                <option value="7">5º SÉRIE - ENSINO FUNDAMENTAL</option>
                <option value="8">4º SÉRIE - ENSINO FUNDAMENTAL</option>
                <option value="9">3º SÉRIE - ENSINO FUNDAMENTAL</option>
                <option value="10">2º SÉRIE - ENSINO FUNDAMENTAL</option>
                <option value="11">1º SÉRIE - ENSINO FUNDAMENTAL</option>
            </select>
            <br>
            <label>Selecione a disciplina correspondente com o conteúdo:</label>
            <select name="selectDisciplina" id="serie" style="display: block;">
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
            <br>
            <textarea name="txtDescDisciplina" cols="30" rows="50" placeholder="Descrição da atividade (opcional)" maxlength="200"></textarea>
            <br><br>
            <button id="btnEntrar" name="btnProsseguir">Prosseguir</button>
        </form>
    </section>
    <br>
</body>
</html>