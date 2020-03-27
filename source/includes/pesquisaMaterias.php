<?php
require_once '../config.php';
$conn = connect();

if (isset($_POST["name"])):
    $search = $_POST["name"];
    $query = "SELECT * FROM MATERIAS INNER JOIN PROFESSORES WHERE NOME_MATERIA LIKE '%$search%' AND PROFESSORES.ID = MATERIAS.ID_PROFESSOR";
else:
    $query = "SELECT * FROM MATERIAS INNER JOIN PROFESSORES WHERE PROFESSORES.ID = MATERIAS.ID_PROFESSOR ORDER BY NOME_MATERIA DESC";
endif;

$stmt = $conn->prepare($query);
$stmt->execute();
$cont = 0;
if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<a href='?texto={$row['NOME_MATERIA']}&id={$row['ID_PROFESSOR']}'>{$row['NOME_MATERIA']}</a> - by: <i> {$row['NOME']} </i><br>";
        $cont++;
    }
} else {
    echo "<b> Nenhum registro encontrado... </b>";
}