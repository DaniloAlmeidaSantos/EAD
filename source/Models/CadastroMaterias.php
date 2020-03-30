<?php
class CadastroMaterias{
    private $conn;

    public function __construct() {
        require_once '../config.php';

        $this->conn = connect();
    }

    public function cadastrarMateria($idDisciplina, $nomeMateria, $descMateria, $idProfessor, $idTurma) {
        try {
            $stmt = $this->conn->prepare("INSERT INTO MATERIAS (ID_DISCIPLINA, NOME_MATERIA, DESCRICAO, ID_PROFESSOR, ID_TURMA) VALUES (?,?,?,?,?)");
            $stmt->bindParam(1, $idDisciplina, PDO::PARAM_INT);
            $stmt->bindParam(2, $nomeMateria, PDO::PARAM_STR);
            $stmt->bindParam(3, $descMateria, PDO::PARAM_STR);
            $stmt->bindParam(4, $idProfessor, PDO::PARAM_INT);
            $stmt->bindParam(5, $idTurma, PDO::PARAM_INT);
            $stmt->execute();

            if ($stmt->rowCount() > 0){
                $_SESSION['error'] = null;
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            $_SESSION['error'] = "ERROR: " . $e->getMessage();
        }
    }

    public function getId(){
        $stmt = $this->conn->prepare('SELECT ID FROM MATERIAS WHERE ID_PROFESSOR = ? ORDER BY ID DESC LIMIT 1');
        $stmt->bindParam(1, $_COOKIE['id'], PDO::PARAM_INT);
        $stmt->execute();
        
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $_SESSION['idMateria'] = $row['ID'];
        }
    }

    public function getIdPesquisa($nomeMateria, $idProfessor) {
        $stmt = $this->conn->prepare('SELECT ID FROM MATERIAS WHERE NOME_MATERIA = ? AND ID_PROFESSOR = ?');
        $stmt->bindParam(1, $nomeMateria, PDO::PARAM_STR);
        $stmt->bindParam(2, $idProfessor, PDO::PARAM_INT);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $_SESSION['idMateria'] = $row['ID'];
            }
            $_SESSION['error'] = null;
            return true;
        } else {
            $_SESSION['error'] = "ERROR: Estamos enfrentando problemas para achar a matéria selecionada, tente novamente.";
            return false;
        }
    }
}