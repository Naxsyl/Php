<?php
// date
// untuk menampilkan tanggal dengan format tertentu
// echo date("l, d-M-Y");

// time
//  UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 januari 1970
// echo time();

// echo date("d M Y", time()+60*60*24*50)

// mktime
// membuat detik sendiri
// mktime (0,0,0,0,0,0)
// jam,menit,detik,bulan,tanggal,tahun 

// echo date("l",mktime(0,0,0,3,9,2005));
// echo date("l",mktime(0,0,0,4,9,2000));

// strtotime
echo date("l",strtotime("4 apr 2023"));

?>