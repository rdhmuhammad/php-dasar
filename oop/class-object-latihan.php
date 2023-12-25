<?php

class Produk
{
    public
        $judul = "php",
        $penulis,
        $penerbit,
        $harga;

    public function printJudul()
    {
        echo $this->judul;
    }
}

$produk1 = new Produk();
$produk1->judul = "go";
// this section can add new property but has been deprecated.
// the property called dynamic property.
$produk1->newProperty = "hahah";
var_dump($produk1);
$produk1->printJudul();