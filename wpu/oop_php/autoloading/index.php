<?php

require_once 'App/init.php';

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 25000, 100);
$produk2 = new Game("Dragon Ball", "Akira Toriyama", "Bandai Namco", 25000, 50);

// Komik : Naruto | Masashi kishimoto,Shonen Jump (Rp.25000)- 100 halaman

$cetakProduk = new CetakInfoProduk();
$cetakProduk->tambahProduk($produk1);
$cetakProduk->tambahProduk($produk2);
echo $cetakProduk->cetak();

echo "<hr>";
new Coba();
