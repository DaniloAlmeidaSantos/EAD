<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EAD - Upload</title>
</head>
<body>
    <h1>Preencha as informações requeridas</h1>
    <h4 id="erro">
        <?php
            if (isset($_SESSION['error'])) {
                echo $_SESSION['error'];
            }
        ?>
    </h4>
    <h4>
        <?php
            if (isset($_GET['voltar'])) {
                echo "Aula enviado com sucesso!! Se sinta a vontade para enviar novas aulas ou  <a href='../index.php'> volte ao ínicio </a>";
            }
        ?>
    </h4>
    <form action="preUploadMaterias.php?pesquisa" method="post">
        <section id="Disciplina">
            <fieldset> <legend>Informações da atividade / video aula</legend>
                <input type="text" name="txtTitulo" placeholder="Título*..." required>
                <label> Disciplina:
                    <select name="selectDisciplina">
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
                </label>
                <label>Escolha a série:
                    <select name="selectSerie">
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
                </label>
                <br><br>
                <textarea name="txtDescDisciplina" cols="30" rows="10" maxlength="160" placeholder="Descrição da atividade / video aula (opcional)...."></textarea>
            </fieldset>
        </section>
        <button type="submit" name="btnProsseguir">Prosseguir</button>

        <?php
            if (isset($_GET['voltar'])) {
                echo "<a href='../index.php'>Voltar</a>";
            }
        ?>
    </form>
    <footer><p>&copy; Copyrigth 2020 - Todos direitos reservados</p></footer>
</body>
</html>