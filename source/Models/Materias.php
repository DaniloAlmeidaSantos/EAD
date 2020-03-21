<?php
class Materias {
    private $conn;

    public function __construct() {
        require_once '../source/config.php';

        $conn = connect();
    }

    public function getId() {
        try {
            $stmt = $this->conn->prepare('SELECT * FROM MATERIAS');
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<option value='$row[ID]'>$row[NOME_MATERIA]</option>";
                }
                $error  = null;
            } else {
                $_SESSION["error"]  = "Nenhuma Matéria cadastrada";
            }
        } catch (PDOException $e) {
            $_SESSION["error"] = "ERROR: " . $e;
        } 
    }
}