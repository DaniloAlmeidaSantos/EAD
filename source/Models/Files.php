<?php
class Files {
    private $conn;

    public function __construct() {
        require_once '../source/config.php';

        $this->conn = connect();
    }
    
    public function arquivoTexto($idTurma, $titulo, $descricao, $idProfessor, $idMateria) {
        $_UP['folder']       = '../files/pdf/';
        $_UP['size']         = 1024*1024*5; // 5 MB
        $_UP['extensions']   = array('pdf', 'ppt', 'doc', 'docx');
        $_UP['rename']       = true;
        
        $files_tmp          = $_FILES['file']['tmp_name'];
        $file               = $_FILES['file'];
        
        $extension          = pathinfo($file['name'], PATHINFO_EXTENSION);
        $extension          = strtolower($extension);
        
        if (array_search($extension, $_UP['extensions']) === false) {
            $_SESSION['error']  = "Por favor envie arquivos com formatos .pdf, .ppt, .doc ou .docx";
            exit;
        } elseif ($_UP['size'] < $file['size']) {
            $_SESSION['error']  = "Por favor insira um arquivo com tamanho de armazenamento de 5 MB ou menos";
            exit;
        } else {
            $atividade          = uniqid(time()) . "." . $extension;
            $_SESSION['error']  = null;
        }
        
        if (move_uploaded_file($file['tmp_name'], $_UP['folder'].$atividade)) {
            $stmt = $this->conn->prepare('INSERT INTO ATIVIDADES (ID_TURMA, TITULO, DESCRICAO, ATIVIDADE, ID_PROFESSOR, ID_MATERIA) VALUES (?,?,?,?,?,?)');
            $stmt->bindParam(1, $idTurma, PDO::PARAM_INT);
            $stmt->bindParam(2, $titulo, PDO::PARAM_STR);
            $stmt->bindParam(3, $descricao, PDO::PARAM_STR);
            $stmt->bindParam(4, $atividade, PDO::PARAM_STR);
            $stmt->bindParam(5, $idProfessor, PDO::PARAM_INT);
            $stmt->bindParam(6, $idMateria, PDO::PARAM_INT);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                $_SESSION['error']  = "Não foi possível fazer upload deste arquivo no momento, tente mais tarde";
                return false;
            }
        } else {
            $_SESSION['error']      = "Estamos com problema no momento, tente fazer upload do arquivo mais tarde";
            return false;
        }
    }

    public function videoAula($idTurma, $titulo, $descricao, $idProfessor, $idMateria) {
        $_UP['folder']       = '../files/video/';
        $_UP['size']         = 1024*1024*50; // 50 MB
        $_UP['extensions']   = array('mp4', 'avi', 'wmv');
        $_UP['rename']       = true;
        
        $files_tmp          = $_FILES['file']['tmp_name'];
        $file               = $_FILES['file'];
        
        $extension          = pathinfo($file['name'], PATHINFO_EXTENSION);
        $extension          = strtolower($extension);
        
        if (array_search($extension, $_UP['extensions'] === false)) {
            $_SESSION['error']  = "Por favor envie arquivos com formatos .mp4 ou .avi";
            exit;
        } elseif ($_UP['size'] < $file['size']) {
            $_SESSION['error']  = "Por favor insira um arquivo com tamanho de armazenamento de 50 MB ou menos";
            exit;
        } else {
            $video        = uniqid(time()). "." . $extension;
            $_SESSION['error']          = null;
        }
        
        if (move_uploaded_file($file['tmp_name'], $_UP['folder'].$video)) {
            $stmt = $this->conn->prepare('INSERT INTO VIDEO_AULAS (ID_TURMA, TITULO, DESCRICAO, VIDEO, ID_PROFESSOR, ID_MATERIA) VALUES (?,?,?,?,?,?)');
            $stmt->bindParam(1, $idTurma, PDO::PARAM_INT);
            $stmt->bindParam(2, $titulo, PDO::PARAM_STR);
            $stmt->bindParam(3, $descricao, PDO::PARAM_STR);
            $stmt->bindParam(4, $video, PDO::PARAM_STR);
            $stmt->bindParam(5, $idProfessor, PDO::PARAM_INT);
            $stmt->bindParam(6, $idMateria, PDO::PARAM_INT);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                return true;
            } else {
                $_SESSION['error']  = "Não foi possível fazer upload deste arquivo no momento, tente mais tarde";
                return false;
            }
        } else {
            $_SESSION['error'] = "Estamos com problema no momento, tente fazer upload do arquivo mais tarde";
        }
    }
}