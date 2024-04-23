<?php 
session_start();
if(!isset($_SESSION["login"]) ) {
    header("Location:login.php");
    exit;
}

require 'functions.php';

// pagination
// Konfigurasi
$jumlahDataPerHalaman = 5;
$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = (isset($_GET["halaman"]) ) ? $_GET["halaman"] :1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;


$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

// tombol cari ditekan
if(isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"], $halamanAktif, $jumlahDataPerHalaman);
} else {
    $mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    
<a href="logout.php">Log Out</a>


<h1>Daftar Mahasiswa</h1>
<a href="tambah.php">Tambah Data Mahasiswa</a>
<br><br>

<form action="" method="post">

    <input type="text" name="keyword" size="40" autofocus placeholder="masukkan keyword pencarian" autocomplete="off" id="keyword">
    <button type="submit" name="cari" id="tombol-cari">Cari!</button>

</form>

<!-- navigasi -->

<?php if( $halamanAktif > 1 ): ?>
<a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
<?php endif; ?>



<?php for( $i = 1; $i <= $jumlahHalaman; $i++ ): ?>
    <?php if($i == $halamanAktif) : ?>
        <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"
        ><?= $i;?></a>
    <?php else : ?>
        <a href="?halaman=<?= $i; ?>"><?= $i;?></a>
    <?php endif; ?>
<?php endfor; ?>

<?php if( $halamanAktif < $jumlahHalaman ): ?>
<a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
<?php endif; ?>


<br>

<div id="container">
<table border="1" cellpading="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>NRP</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php foreach($mahasiswa as $row) : ?>
    <tr>
        <td><?= $i + $awalData;?></td>
        <td>
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

<script src="js/script.js"></script>
</body>
</html>