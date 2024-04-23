<?php

// class ContohStatic
// {
//     public static $angka = 1;

//     public static function halo()
//     {
//         return "halo " . self::$angka++ . " Kali.";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::halo();
// echo "<hr>";
// echo ContohStatic::halo();


class Contoh
{
    public static $angka = 1;

    public static function halo()
    {
        return "halo " . self::$angka++ . " Kali. <br>";
    }
}

$obj1 = new Contoh;
echo $obj1->halo();
echo $obj1->halo();
echo $obj1->halo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
