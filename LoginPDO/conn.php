<?php
    $host = "localhost";
    $username = "root";
    $passwd = "";
    $database = "mydb";
    try {
        $conn = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $username, $passwd);
    } catch (PDOException $e) {
        echo "Baglanti Basarisiz : " . $e -> getMessage();
    }
?>