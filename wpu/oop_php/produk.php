<?php

class Produk
{
    public  $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    public function getLabel()
    {
        return "$this->judul, $this->penerbit";
    }
}

$produk1 = new Produk();
$produk1->judul = "Naruto";
$produk1->penulis = "Masashi Kishimoto";
$produk1->penerbit = "Shonen Jump";
$produk1->harga = 25000;

// echo "komik :". $produk1->judul, $produk1->penerbit;
echo "komik :" . $produk1->getLabel() . "<br>";

$produk2 = new Produk();
$produk2->judul = "One Piece";
$produk2->penulis = "Echiro Oda";
$produk2->penerbit = "Shonen Jump";
$produk2->harga = 25000;

echo "Komik :". $produk2->getLabel();