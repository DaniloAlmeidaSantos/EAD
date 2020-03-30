<?php
function connect(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "PAULINO";

    try 
    {
        $pdo = new PDO("mysql:host=$servername;dbname=$dbname;charset=utf8mb4", $username, $password, array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET CHARACTER SET utf8"
        ));
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
    }
    catch(PDOException $e)
    {
        throw new PDOException($e);
    }

    return $pdo;
}