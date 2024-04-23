<?php

// define('NAMA', 'Nasril'); // tidak bisa di dalam class
// echo NAMA;

// echo "<br>";

// const UMUR = 18; // bisa di dalam class
// echo UMUR;

// class Coba
// {
//     const NAMA = 'Nasril';
// }
// echo Coba::NAMA;

// function Coba()
// {
//     return __FUNCTION__;
// }
// echo Coba();


class Coba
{
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
