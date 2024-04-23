<?php 
session_start();
if(!isset($_SESSION["login"]) ) {
    header("Location:login.php");
    exit;
}

require 'functions.php';

$mahasiswa = query("SELECT * FROM mahasiswa");

// tombol cari ditekan
if(isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        .loader {
            width: 100px;
            position: absolute;
            top: 114px;
            left: 330px;
            display: none;
        }
        @media print {
            .logout, .tambah, .form, .aksi {
                display: none;
            }
        }
    </style>
    <script src="js/tes.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
    
<a href="logout.php" class="logout">Log Out</a>


<h1>Daftar Mahasiswa</h1>
<a href="tambah.php" class="tambah">Tambah Data Mahasiswa</a>
<br><br>

<form action="" method="post" class="form">

    <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian" autocomplete="off" id="keyword">
    <button type="submit" name="cari" id="tombol-cari">Cari!</button>

    <img src="img/load.gif" class="loader">

</form>
<br>
<div id="container">
<table border="1" cellpading="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th class="aksi">Aksi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>NRP</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach($mahasiswa as $row) : ?>
    <tr>
        <td><?= $i;?></td>
        <td class="aksi">
            <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
            <a href="hapus.php?id=<?= $row["id"]; ?>"  onclick="return confrim('yakin?');">hapus</a>
        </td>
        <td>
            <img src="img/<?= $row["gambar"]; ?>" alt="" width="50">
        </td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["nrp"]; ?></td>
        <td><?= $row["email"]; ?></td>
        <td><?= $row["jurusan"]; ?></td>
    </tr>
    <?php $i++;?>
    <?php endforeach; ?>
</table>
</div>

</body>
</html>