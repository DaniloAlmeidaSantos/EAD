<?php
class MostrarConteudo {
    private $conn;

    public function __construct() {
        require_once '../source/config.php';

        $this->conn = connect();

        if (isset($_GET['true'])){
            $_SESSION['cont'] = 0;
        }
    }

    public function video() {
        if ($_SESSION['cont'] < 0){
            $_SESSION['cont'] = $_SESSION['total'];
            $cont = $_SESSION['cont'];
        } elseif ($_SESSION['cont'] > $_SESSION['total']){
            $_SESSION['cont'] = 0;
            $cont = $_SESSION['cont'];
        } elseif (isset($_GET['true'])) {
            $cont = $_SESSION['cont'];
        } else {
            $cont = $_SESSION['cont']++;
        }
        $id = $_SESSION['track'][$cont];

        $stmt = $this->conn->prepare('SELECT * FROM VIDEO_AULAS WHERE ID = ?');
        $stmt->bindParam(1, $id, PDO::PARAM_INT);
        $stmt->execute();

        if ($stmt->rowCount() > 0) {
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                echo "<video controls autoplay> 
                    <source src='../files/video/{$row['VIDEO']}' type='video/mp4'>
                </video>";
            }
            return true;
        } else {

        }
    }
}