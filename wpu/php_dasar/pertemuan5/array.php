<?php
// Array
// Variabel yang dapat menampung banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value 
// keynya adalah index, yang dimulai dari 0

// membuat array
// cara lama
$hari = array("Senin", "selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Febuari", "Maret"];

// menampilkan array
// var_dump()  / print_r()

// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// menampilkan 1 elemen array
// echo $hari[1];
// echo "<br>";
// echo $bulan[2];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
echo $hari[3];
echo "<br>";
var_dump($hari);
