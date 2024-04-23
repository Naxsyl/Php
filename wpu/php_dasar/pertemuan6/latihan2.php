<?php
// $mahasiswa = [
//     ["Nasril Nufa", "080706","Teknik Ninja","@naxsyl"],
//     ["Rizki", "080707","Teknik Ninja","@rizki"],
//     ["Zaim", "080708","Teknik Ninja","@zaim"]
// ]; 

// array associative
// definisinya sama saja dengan array numerik, kecuali
// keynya adalah string yang kita buat sendiri

$mahasiswa = [
    [
    "nama" => "Nasril Nufa", 
    "nrp" => "080706",
    "jurusan" => "Teknik Ninja",
    "email" => "@naxsyl",
    "gambar" => "kita.jpeg"
    ],
    [
    "nama" => "Rizki", 
    "nrp" => "080707",
    "jurusan" => "Teknik Tinja",
    "email" => "@rizki",
    "gambar" => "nijika.jpeg"
    ],
    [
    "nama" => "Zaim", 
    "nrp" => "080708",
    "jurusan" => "Teknik Tinja",
    "email" => "@zaim",
    "gambar" => "bocchi.jpeg"
    ]
];

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

    <?php foreach($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?= $mhs["gambar"] ;?>">
        </li>
        <li>Nama:<?php echo $mhs["nama"];?></li>
        <li>NRP :<?php echo $mhs["nrp"];?></li>
        <li>Jurusan :<?php echo $mhs["jurusan"];?></li>
        <li>Email :<?php echo $mhs["email"];?></li>
    </ul>
    <?php endforeach; ?>

 </body>
 </html>