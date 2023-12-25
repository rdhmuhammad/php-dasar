<?php

/*
 * Constructor Method - method yang otomatis dipanggil ketika
 * awal kelas pertama di instantiate
 */

class Produk
{
    public $judul,
        $penulis,
        $harga,
        $penerbit;

    public function __construct($judul, $penulis, $harga, $penerbit)
    {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->harga = $harga;
        $this->penerbit = $penerbit;
    }

    public function getLabel()
    {
        echo "Buku $this->judul, ditulis ole $this->penulis";
    }
}

$naruto = new Produk(
    "Naruto Shippuden Vol 1",
    "Kishimoto. M",
    120000,
    "Shonen Jump"
);

$naruto->getLabel();