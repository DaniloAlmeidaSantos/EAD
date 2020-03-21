<?php
    if (isset($_POST['texto'])) {
        echo $_POST['texto'];
    } elseif (isset($_POST['video'])) {
        echo $_POST['video'];
    }
?>