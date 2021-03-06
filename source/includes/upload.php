<?php
session_start();
require_once '../Models/CadastroMaterias.php';
$materia = new CadastroMaterias();

if ($_SESSION['idProfessor']) {
    $id = $_SESSION['idProfessor'];
} else {
    $id = $_COOKIE['id'];
}

if (isset($_GET['pesquisa'])) {
    $_SESSION['preUpload'] = array(
        'titulo'            => $_SESSION['txtTitulo'], 
        'disciplinas'       => $_SESSION['selectDisciplina'],
        'descDisciplina'    => $_SESSION['txtDescDisciplina'],
        'nomeMateria'       => $_SESSION['txtNomeMateria'],
        'descMateria'       => $_SESSION['txtDescMateria'],
        'turma'             => $_SESSION['selectSerie'],
        'idProfessor'       => $id
    );

    var_dump($_SESSION['preUpload']);
    if ($materia->getIdPesquisa($_SESSION['txtNomeMateria'], $_SESSION['idProfessor'])) {
        header('location: ../../view/upload.php');
    } else {
        header('location: ../../view/preUpload.php');
    }
} elseif (isset($_GET['cadastro'])) {
    $_SESSION['preUpload'] = array(
        'titulo'            => $_SESSION['txtTitulo'], 
        'disciplinas'       => $_SESSION['selectDisciplina'],
        'descDisciplina'    => $_SESSION['txtDescDisciplina'],
        'nomeMateria'       => $_SESSION['txtNomeMateria'],
        'descMateria'       => $_SESSION['txtDescMateria'],
        'turma'             => $_SESSION['selectSerie'],
        'idProfessor'       => $id
    );

    if ($materia->cadastrarMateria($_SESSION['selectDisciplina'], $_SESSION['txtNomeMateria'], $_SESSION['txtDescMateria'], $_COOKIE['id'], $_SESSION['selectSerie'])){
        $materia->getId();
        header('location: ../../view/upload.php');
    } else {
        header('location: ../../view/preUpload.php');
    }
} 