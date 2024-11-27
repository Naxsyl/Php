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

// 2, prepared statement 
$name = 'nasril';
$pass = '1234';
$email = 'lele@gmail.com';

$sql = "INSERT INTO user (username, password, email) VALUES (:name, :pass, :email)";
$query = $conn->prepare($sql);

$params = array(
    ':name' => $name,
    ':pass' => $pass,
    ':email' => $email
);
$params2 = array(
    ':name' => 'udin',
    ':pass' => 'cuki',
    ':email' => 'goreng@gmail.com'
);

$query->execute($params); // eksekusi
$query->execute($params2);

echo "id terakhir : " . $conn->lastInsertId();
// enak pake prepared statement bisa eksekusi berkali kali