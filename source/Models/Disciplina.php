<?php
class Disciplina {
    private $conn;

    public function __construct() {
        require_once '../source/config.php';

        $conn = connect();
    }

    public function getMaterias() {
        
    }
}