<?php
class Materias {
    private $conn;

    public function __construct() {
        require_once '../source/config.php';

        $this->conn = connect();
    }

    public function getMaterias($idDisciplina, $idTurma) {
        try {
            $stmt = $this->conn->prepare("SELECT m.id AS m_id, m.NOME_MATERIA, p.NOME, m.ID_TURMA AS m_idTurma FROM MATERIAS AS m INNER JOIN PROFESSORES AS p WHERE m.ID_TURMA = ? AND m.ID_DISCIPLINA = ? AND m.ID_PROFESSOR = p.ID");
            $stmt->bindParam(1, $idTurma, PDO::PARAM_INT);
            $stmt->bindParam(2, $idDisciplina, PDO::PARAM_INT);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<div class='wrapperImgVideo'>
                            <a href='conteudo.php?{$row['m_id']}'><img src='' alt=''></a>

                            <div class='titleVideo'>
                                <div class='innerTitleImg'>
                                    <img src='' alt=''>
                                </div>
                                <div class='innerTitle'>
                                    <h2>Matéria: {$row['NOME_MATERIA']}</h2>
                                    <h3>Por: {$row['idTurma']}</h3>
                                </div>
                            </div>
                        </div>";
                }
                return true;
            } else {
                echo "<p style='color: black'>Nenhum registro encontrado... </p>";
                return false;
            }
        } catch (PDOException $e) {
            echo $e;
        }
    }
}