<?php 
// cek apakah tidak ada data di $_GET
if (!isset($_GET["nama"]) ||
    !isset($_GET["nrp"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["gambar"])) {
    // reditect
    header("Location: latihan1.php");
    exit;
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"];?>" alt=""></li>
        <li><?= $_GET["nama"];?></li>
        <li><?= $_GET["nrp"];?></li>
        <li><?= $_GET["jurusan"];?></li>
        <li><?= $_GET["email"];?></li>
    </ul>

    <a href="latihan1.php">Kembali Ke Daftar Mahasiswa</a>
</body>
</html>