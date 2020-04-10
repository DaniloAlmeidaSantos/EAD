<?php 
class Conteudo {
    private $conn;

    public function __construct() {
        require_once '../source/config.php';

        $this->conn = connect();
    }
    
    public function getConteudoAtividade ($idTurma, $idMateria) {
        try {
            $stmt = $this->conn->prepare('SELECT A.ID AS idA, A.ID_MATERIA, P.NOME, A.TITULO FROM ATIVIDADES AS A INNER JOIN PROFESSORES AS P ON (A.ID_PROFESSOR = P.ID) WHERE A.ID_TURMA = ? AND A.ID_MATERIA = ?');
            $stmt->bindParam(1, $idTurma, PDO::PARAM_INT);
            $stmt->bindParam(2, $idMateria, PDO::PARAM_INT);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    echo "<div class='wrapperImgVideo'>
                        <a href='pdf.php?idAtt={$row['ID_MATERIA']}&true' style='color: white;'>
                            <img src='../design/imagens/turmas.jpg'>
                            
                            <h2>Aula: {$row['TITULO']}</h2>
                            <h3>Por: {$row['NOME']}</h3>
                        </a>
                    </div>";
                }
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            $_SESSION['error'] = "ERROR: " . $e->getMessage();
        }
    }

    public function getConteudoVideo ($idTurma, $idMateria) {
        try {
            $stmt = $this->conn->prepare('SELECT V.ID AS idV, P.NOME, V.TITULO FROM VIDEO_AULAS AS V INNER JOIN PROFESSORES AS P ON (V.ID_PROFESSOR = P.ID) WHERE V.ID_TURMA = ? AND V.ID_MATERIA = ?');
            $stmt->bindParam(1, $idTurma, PDO::PARAM_INT);
            $stmt->bindParam(2, $idMateria, PDO::PARAM_INT);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $_SESSION['track'] = array();
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                    $_SESSION['track'][]    = $row['idV'];
                    
                    echo "<div class='wrapperImgVideo'>
                        <a href='video.php?id={$row['idV']}&true' style='color: white;'>
                            <img src='../design/imagens/turmas.jpg' clas='banner'>
                            
                            <h2>Aula: {$row['TITULO']}</h2>
                            <h3>Por: {$row['NOME']}</h3>
                        </a>
                    </div>";
                }
                return true;
            } else {
                echo "Nenhum registro encontrado...";
                return false;
            }
        } catch (PDOException $e) {
            $_SESSION['error'] = "ERROR: " . $e;
        }
    }
}