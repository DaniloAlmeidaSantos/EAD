<?php
require_once '../config.php';
$conn = connect();

if (isset($_POST["name"])):
    $search = $_POST["name"];
    $query = "SELECT * FROM MATERIAS WHERE NOME_MATERIA LIKE '%$search%'";
else:
    $query = "SELECT * FROM MATERIAS ORDER BY NOME_MATERIA DESC";
endif;

$stmt = $conn->prepare($query);
$stmt->execute();
$cont = 0;
if ($stmt->rowCount() > 0) {
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        echo "<a href='javascript:;' id='$cont' onclick='trocarTexto();'>{$row['NOME_MATERIA']}</a><br>";
        $cont++;
    }
    echo "<input type='hidden' value='$cont' id='contador'>";
} else {
    echo "<b> Nenhum registro encontrado... </b>";
}