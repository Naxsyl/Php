<?php
// variabel scope / atau lingkup variabel
// $x = 10;
// function tampilX() {
//     global $x;
//     echo $x;
// }
// tampilX();

// SUPERGLOBALS
// variabel global milik PHP
// merupakan array associative

// $_GET
// $_GET["nama"] = "Nasril Nufa";

$mahasiswa = [
    [
    "nama" => "Nasril Nufa", 
    "nrp" => "080706",
    "jurusan" => "Teknik Ninja",
    "email" => "@naxsyl",
    "gambar" => "kita.jpg"
    ],
    [
    "nama" => "Rizki", 
    "nrp" => "080707",
    "jurusan" => "Teknik Tinja",
    "email" => "@rizki",
    "gambar" => "nijika.jpg"
    ],
    [
    "nama" => "Zaim", 
    "nrp" => "080708",
    "jurusan" => "Teknik Tinja",
    "email" => "@zaim",
    "gambar" => "bocchi.jpg"
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs): ?>
            <li>
                <a href="latihan2.php?nama=<?= $mhs["nama"];?>&nrp=<?= $mhs["nrp"];?>&jurusan=<?= $mhs["jurusan"];?>&email=<?= $mhs["email"];?>&gambar=<?= $mhs["gambar"];?>"><?= $mhs["nama"];?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>