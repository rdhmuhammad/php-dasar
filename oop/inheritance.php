<?php

/*
 * Inheritance, konsep yang menciptakan hirarki antar kelas (parent & child).
 * tiap kelas di hubungkan dengan inheritance.
 * - child class mewarisi atau dapat menggunakan property dan method class parent yang visible.
 * - child class dapat perluas (extend) fungsionalitas class parent.
 *
 * Contoh
 * - Kita dapat membuat class mobil.
 * tetapi tiap mobil punya tipe dan feature berbeda. seperti mobil sport.
 * maka parent nya adalah class mobil, childny adalah class mobilSport.
 * Kegunaan
 *
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

    function getLabel()
    {
        return "{$this->judul} | {$this->penulis}, {$this->penerbit}. Rp. {$this->harga}";
    }
}

class Buku extends Produk
{
    public $jumlahHalaman;

//    using overriding
    public function __construct($judul, $penulis, $harga, $penerbit, $jumlahHalaman)
    {
        $this->jumlahHalaman = $jumlahHalaman;
        parent::__construct($judul, $penulis, $harga, $penerbit);
    }

//    calling parent method using parent::function()
    public function getLabel()
    {
        return parent::getLabel() . " | {$this->jumlahHalaman} Halaman";
    }
}

$tas = new Produk(
    "Sandang",
    "Nike",
    12000,
    ""
);
echo $tas->getLabel();
echo "<br>";

$naruto = new Buku(
    "Naruto Shippuden Vol 1",
    "Kishimoto. M",
    120000,
    "Shonen Jump",
    600
);

echo $naruto->getLabel();

echo "<hr>";

/*
 * Visibility atau access modifier.
 * - Public = dapat digunakan diparent child dan dimana saja
 * - protected = hanya digunakan kelas dan childrennya.
 * - private = hanya digunakan dalam kelas tersebut.
 *
 * - kebutuhan
 * - - memperlihatkan method dan properti apa saja yang benar"
 * dibutuhkan client.
 * - - kendali pada property sehingga ownership jelas.
 */