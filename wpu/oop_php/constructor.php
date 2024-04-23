<?php

class Produk
{
    public  $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 25000);
$produk2 = new Produk("One Piece", "Oda", "Shonen Jump", 25000);

// echo "komik :". $produk1->judul, $produk1->penerbit;
echo "komik :" . $produk1->getLabel();
echo "<br>";
echo "komik :" . $produk2->getLabel();
