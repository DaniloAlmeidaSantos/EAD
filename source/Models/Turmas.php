<?php 
class Turmas {
    private $conn;

    public function __construct() {
        require_once '../config.php';

        $this->conn = connect();
    }
    
    public function  getCboTurmas() {
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

    public function getTurmas() {
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
            $error = "ERROR: " . $e;
        }
    }

    public function verificarSerie($serie) {
        try {
            $stmt = $this->conn->prepare('SELECT * FROM TURMAS WHERE SERIE = ?');
            $stmt->bindParam(1, $serie, PDO::PARAM_STR);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return false;
            } else {
                return true;
            }
        } catch (PDOException $e) {
            $error = "ERROR: " . $e;
        }
    }
}