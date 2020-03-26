<?php 
class Conteudo {
    private $conn;

    public function __construct() {
        require_once '../source/config.php';

        $this->conn = connect();
    }
    
    public function getConteudoAtividade ($idTurma) {
        try {
            $stmt = $this->conn->prepare('SELECT * FROM TURMAS INNER JOIN ATIVIDADES INNER JOIN MATERIAS WHERE ATIVIDADES.ID_TURMA = ? AND ATIVIDADES.ID_TURMA = TURMAS.ID AND ATIVIDADES.ID_MATERIA = MATERIAS.ID');
            $stmt->bindParam(1, $idTurma, PDO::PARAM_INT);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    
                }
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            $_SESSION['error'] = "ERROR: " . $e->getMessage();
        }
    }

    public function getConteudoVideo ($idTurma) {
        try {
            $stmt = $this->conn->prepare('SELECT * FROM TURMAS INNER JOIN VIDEO_AULAS INNER JOIN MATERIAS WHERE VIDEO_AULAS.ID_TURMA = ? AND VIDEO_AULAS.ID_TURMA = TURMAS.ID AND VIDEO_AULAS.ID_MATERIA = MATERIAS.ID');
            $stmt->bindParam(1, $idTurma, PDO::PARAM_INT);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    
                }
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            $error = "ERROR: " . $e;
        }
    }
}