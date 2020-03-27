<?php
class Login {
    private $conn;

    public function __construct() {
        require_once 'source/config.php';

        $this->conn = connect();

        if (isset($_COOKIE['id'])) {
            $_SESSION['login']  = "Fazer upload de aulas";
            $_SESSION['link']   = "view/preUpload.php";
        } else {
            $_SESSION['login']  = "<span class='material-icons'>account_circle</span>";
            $_SESSION['link']   = "login.php";
        }
    }

    public function acessar($email, $senha) {
        try {
            $stmt = $this->conn->prepare('SELECT * FROM PROFESSORES WHERE EMAIL = ? AND SENHA = ?');
            $stmt->bindParam(1, $email, PDO::PARAM_STR);
            $stmt->bindParam(2, $senha, PDO::PARAM_STR);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
                    setcookie('id', $row["ID"]);
                    header('location: index.php');
                }
                $_SESSION['error'] = null;
            } else {
                $_SESSION['error']  = "Por favor insira e-mail e senha corretamente";
            }
            
        } catch (PDOException $e) {
            $_SESSION['error']  = "ERROR: " . $e;
        }
    }
}