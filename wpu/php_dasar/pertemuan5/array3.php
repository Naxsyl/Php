<?php

$mahasiswa = [
    ["Nasril Nufa", "09090807", "Teknik Ninja", "Email"],
    ["Rizki", "09090869", "Teknik Tinja", "Email"],
    ["Zaim", "09098869", "Ewe Loli", "Email"]
];
// cara mencetak 1 array di array multidimensi
// echo $mahasiswa[1][0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
        <ul>
            <li>Nama :<?= $mhs[0]; ?></li>
            <li>NPR :<?= $mhs[1]; ?></li>
            <li>Jurusan :<?= $mhs[2]; ?></li>
            <li>Email :<?= $mhs[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>