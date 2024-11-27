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
// $result = $conn->query("SELECT * FROM user");

// while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
//     echo $row['username'] . "<br>";
// }

// while ($row = $result->fetch(PDO::FETCH_OBJ)) {
//     echo $row->username . "<br>";
//     echo $row->email . "<br>";
// }

// 2, prepared statement 
// bisa mencegah sql injek
// $name = "apapun' OR '1'='1";

// $query = "SELECT * FROM user WHERE username = '$name'"; //bisa di injek
// var_dump($conn->query($query)->fetchAll(PDO::FETCH_ASSOC));
$name = 'nasril';

// cara 1
// $query = $conn->prepare("SELECT * FROM user WHERE username = :name");
// $query->execute(array(':name' => $name));

// cara 2
$query = $conn->prepare("SELECT * FROM user WHERE username = ?");
$query->execute(array($name));
var_dump($query->fetch(PDO::FETCH_ASSOC));
    

// echo "id terakhir : " . $conn->lastInsertId();
// enak pake prepared statement bisa eksekusi berkali kali