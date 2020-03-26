<?php
session_start();
require_once '../Models/CadastroMaterias.php';
$materia = new CadastroMaterias();

if (isset($_POST['btnProsseguir'])) {
    $_SESSION['preUpload'] = array(
        'titulo'            => $_POST['txtTitulo'], 
        'disciplinas'       => $_POST['selectDisciplina'],
        'descDisciplina'    => $_POST['txtDescDisciplina'],
        'nomeMateria'       => $_POST['txtNomeMateria'],
        'descMateria'       => $_POST['txtDescMateria'],
        'turma'             => $_POST['selectSerie']
    );

    if (isset($_POST['addMateria'])) {
        if ($materia->cadastrarMateria($_POST['selectDisciplina'], $_POST['txtNomeMateria'], $_POST['txtDescMateria'])){
            $materia->getId();
            header('location: ../../view/upload.php');
        } else {
            header('location: ../../view/preUpload.php');
        }
    } else {
        header('location: ../../view/upload.php');
    }
}