<?php
class CadastroMaterias{
    private $conn;

    public function __construct() {
        require_once '../config.php';

        $this->conn = connect();
    }

    public function cadastrarMateria($idDisciplina, $nomeMateria, $descMateria) {
        try {
            $stmt = $this->conn->prepare("INSERT INTO MATERIAS (ID_DISCIPLINA, NOME_MATERIA, DESCRICAO) VALUES (?,?,?)");
            $stmt->bindParam(1, $idDisciplina, PDO::PARAM_INT);
            $stmt->bindParam(2, $nomeMateria, PDO::PARAM_STR);
            $stmt->bindParam(3, $descMateria, PDO::PARAM_STR);
            $stmt->execute();

            if ($stmt->rowCount() > 0){
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            $_SESSION['error'] = "ERROR: " . $e->getMessage();
        }
    }

    public function getId(){
        $stmt = $this->conn->prepare('SELECT ID FROM MATERIAS ORDER BY ID DESC LIMIT 1');
        $stmt->execute();

        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $_SESSION['idMateria'] = $row['ID'];
        }
    }
}