<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'belajar_pdo';

try {
    $conn = new PDO("mysql:host=$server;dbname=$db_name", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Berhasil Koneksi ke database";
} catch (PDOException $e) {
    echo $e->getMessage();
    echo "<h1>ERROR</h1>";
}
