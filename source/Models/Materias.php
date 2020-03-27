<?php
class Materias {
    private $conn;

    public function __construct() {
        require_once '../source/config.php';

        $conn = connect();
    }

    public function getMaterias($idDisciplina, $idTurma) {
        try {
            $stmt = $this->conn->prepare('SELECT * FROM MATERIAS INNER JOIN ATIVIDADES INNER JOIN VIDEO_AULAS INNER JOIN TURMAS WHERE MATERIAS.ID_DISCIPLINA = ? AND TURMAS.ID = ATIVIDADES.ID_TURMA AND TURMAS.ID = VIDEO_AULAS.ID_TURMA');
            $stmt->bindParam(1, $idDisciplina, PDO::PARAM_INT);
            $stmt->bindParam(2, $idTurma, PDO::PARAM_INT);
            $stmt->bindParam(3, $idTurma, PDO::PARAM_INT);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<a href='conteudo.php?idMateria=$row[ID]'></a>";
                }
                $_SESSION['error'] = null;
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            $_SESSION['error'] = "ERROR: " . $e->getMesssage();
        }
    }

    public function pesquisaMaterias() {
        
    }
}