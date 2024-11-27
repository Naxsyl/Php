<?php

$server = 'localhost';
$user = 'root';
$pass = '';
$db_name = 'belajar_pdo';

try {
    $conn = new PDO("mysql:host=$server;dbname=$db_name", $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo $e->getMessage();
    echo "<h1>ERROR</h1>";
}

// 1, Menampilkan datanya
$result = $conn->query("SELECT * FROM user");

// while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
//     echo $row['username'] . "<br>";
// }

while ($row = $result->fetch(PDO::FETCH_OBJ)) {
    echo $row->username . "<br>";
    echo $row->email . "<br>";
}
