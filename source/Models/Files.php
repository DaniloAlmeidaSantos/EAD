<?php
class Files {
    private $conn;

    public function __construct() {
        require_once '../config.php';

        $this->conn = connect();
    }
    
    public function arquivoTexto($idTurma, $idMateria, $titulo, $atividade, $descricao) {
        $_UP['folder']       = '../files/pdf/';
        $_UP['size']         = 1024*1024*20;
        $_UP['extensions']   = array('pdf', 'ppt', 'doc', 'docx');
        $_UP['rename']       = true;
        
        $files_tmp          = $_FILES['file']['tmp_name'];
        $file               = $_FILES['file'];
        
        $extension          = pathinfo($file['name'], PATHINFO_EXTENSION);
        $extension          = strtolower($extension);
        
        if (array_search($extension, $_UP['extensions'] === false)) {
            $error  = "Por favor envie arquivos com formatos .mp3";
            exit;
        } elseif ($_UP['size'] < $file['size']) {
            $error = "Por favor insira um arquivo com tamanho de armazenamento de 20 MB ou menos";
            exit;
        } else {
            $podcast        = uniqid(time()) . $extesion;
            $error          = null;
        }
        
        if (move_uploaded_file($file['tmp_name'], $_UP['folder'].$podcast)) {
            $stmt = $this->conn->prepare('INSERT INTO ATIVIDADE (ID_TURMA, TITULO, DESCRICAO, ATIVIDADE, ID_MATERIA) VALUES (?,?,?,?,?)');
            $stmt->bindParam(1, $idTurma, PDO::PARAM_INT);
            $stmt->bindParam(2, $titulo, PDO::PARAM_STR);
            $stmt->bindParam(3, $descricao, PDO::PARAM_STR);
            $stmt->bindParam(4, $atividade, PDO::PARAM_STR);
            $stmt->bindParam(5, $idMateria, PDO::PARAM_INT);
            $stmt->execute();
        } else {
            $error = "Estamos com problema no momento, tente fazer upload do arquivo mais tarde";
        }
    }

    public function videoAula($idTurma, $titulo, $descricao, $video, $idMateria) {
        $_UP['folder']       = '../files/video/';
        $_UP['size']         = 1024*1024*20;
        $_UP['extensions']   = array('mp4', 'avi');
        $_UP['rename']       = true;
        
        $files_tmp          = $_FILES['file']['tmp_name'];
        $file               = $_FILES['file'];
        
        $extension          = pathinfo($file['name'], PATHINFO_EXTENSION);
        $extension          = strtolower($extension);
        
        if (array_search($extension, $_UP['extensions'] === false)) {
            $error          = "Por favor envie arquivos com formatos .mp3";
            exit;
        } elseif ($_UP['size'] < $file['size']) {
            $error          = "Por favor insira um arquivo com tamanho de armazenamento de 20 MB ou menos";
            exit;
        } else {
            $podcast        = uniqid(time()) . $extesion;
            $error          = null;
        }
        
        if (move_uploaded_file($file['tmp_name'], $_UP['folder'].$podcast)) {
            $stmt = $this->conn->prepare('INSERT INTO ATIVIDADE (ID_TURMA, TITULO, DESCRICAO, VIDEO, ID_MATERIA) VALUES (?,?,?,?,?)');
            $stmt->bindParam(1, $idTurma, PDO::PARAM_INT);
            $stmt->bindParam(2, $titulo, PDO::PARAM_STR);
            $stmt->bindParam(3, $descricao, PDO::PARAM_STR);
            $stmt->bindParam(4, $video, PDO::PARAM_STR);
            $stmt->bindParam(5, $idMateria, PDO::PARAM_INT);
            $stmt->execute();
        } else {
            $error = "Estamos com problema no momento, tente fazer upload do arquivo mais tarde";
        }
    }
}