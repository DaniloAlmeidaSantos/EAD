<?php
class Login {
    private $conn;

    public function __construct() {
        require_once 'source/config.php';

        $this->conn = connect();

        if (isset($_COOKIE['user'])) {
            $_SESSION['login']  = "Fazer upload de aulas";
            $_SESSION['link']   = "view/upload.php";
        } else {
            $_SESSION['login']  = "Fazer login";
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
                    setcookie('user', $row["EMAIL"]);
                    $_SESSION['login']  = "Fazer upload de aulas";
                    $_SESSION['link']   = "view/upload.php";
                    header('location: index.php');
                }
                $error = null;
            } else {
                $_SESSION['error']  = "Por favor insira e-mail e senha corretamente";
                $_SESSION['login']  = "Fazer login";
                $_SESSION['link']   = "login.php";
            }
            
        } catch (PDOException $e) {
            $_SESSION['error']  = "ERROR: " . $e;
        }
    }
}