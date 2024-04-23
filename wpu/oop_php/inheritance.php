<?php

class Produk
{
    public  $judul,
        $penulis,
        $penerbit,
        $harga,
        $jmlHalaman,
        $waktuMain;

    public function __construct(
        $judul = "judul",
        $penulis = "penulis",
        $penerbit = "penerbit",
        $harga = 0,
        $jmlHalaman = 0,
        $waktuMain = 0,

    ) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
    }

    public function getLabel()
    {
        return "$this->penulis, $this->penerbit";
    }

    public function getInfoProduk()
    {
        // Komik : Naruto | Masashi kishimoto,Shonen Jump (Rp. 25000)- 100 Halaman.
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga})";
        if ($this->tipe == "Komik") {
            $str .= "- {$this->jmlHalaman} Halaman.";
        } else if ($this->tipe == "Game") {
            $str .= "~ {$this->waktuMain} Jam.";
        }
        return $str;
    }
}

class Komik extends Produk
{
    public function getInfoProduk()
    {
        $str = "Komik : {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk
{
    public function getInfoProduk()
    {
        $str = "Game : {$this->judul} | {$this->getLabel()}, (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk
{
    public function cetak(Produk $produk)
    {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}



$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 25000, 100, 0);
$produk2 = new Game("Dragon Ball", "Akira Toriyama", "Bandai Namco", 25000, 0, 50);

// Komik : Naruto | Masashi kishimoto,Shonen Jump (Rp.25000)- 100 halaman
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
