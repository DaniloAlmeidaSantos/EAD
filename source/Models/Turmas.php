<?php 
class Turmas {
    private $conn;

    public function __construct() {
        require_once '../source/config.php';

        $this->conn = connect();
    }
    
    public function  setCboTurmas() {
        try {
            $stmt = $this->conn->prepare('SELECT * FROM TURMAS');
            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                #code
            }
        } catch (PDOException $e) {
            $error = "ERROR: " . $e;
        }
    }

    public function setTurmas() {
        try {
            $stmt = $this->conn->prepare('SELECT * FROM TURMAS');
            $stmt->execute();

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                #code
            }
        } catch (PDOException $e) {
            $error = "ERROR: " . $e;
        }
    }

    public function cadastrarTurmas($nomeTurma, $serie){
        try {
            $stmt = $this->conn->prepare('INSERT INTO TURMAS (NOME_TURMA, SERIE) VALUES (?,?)');
            $stmt->bindParam(1, $nomeTurma, PDO::PARAM_STR);
            $stmt->bindParam(2, $serie, PDO::PARAM_STR);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            $_SESSION['error'] = "ERROR: " . $e;
        }
    }

    public function verificarSerie($serie, $turma) {
        try {
            $stmt = $this->conn->prepare('SELECT * FROM TURMAS WHERE SERIE = ? OR NOME_TURMA = ?');
            $stmt->bindParam(1, $serie, PDO::PARAM_STR);
            $stmt->bindParam(2, $tuma, PDO::PARAM_STR);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $_SESSION['error'] = null;
                header('location: preUpload.php');    
            } else {
                $_SESSION['error'] = "<script>alert('Nenhuma turma encontrada, peça a direção que adicione novas turmas ou tente novamente...')</script>";
            }
        } catch (PDOException $e) {
            $_SESSION['error'] = "ERROR: " . $e;
        }
    }
}