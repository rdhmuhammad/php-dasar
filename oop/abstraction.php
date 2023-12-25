<?php

/*
 * Abstract Class
 * - class yang tidak dapat di instantiasi.
 * hanya bisa instantiasi kelas turunannya.
 * akan mendefinisikan interface untuk kelas abstraknya.
 * berperan sebagai kerangka dasar untuk kelas turunan
 * minimal punya 1 method abstrak.
 * kelas turunan harus implementasi semua method abstrak.
 * kelas abstrak boleh punya property method static atau reguler
 *
 * Keuntungan
 * - merepresentasikan ide atau konsep dasar/ keputusan design
 * - composite over inheritance ( sebaiknya melakukan komposisi dibandingkan pewarisan)
 * - composite with interface
 * - salah satu cara menerapkan polimorphism
 * - sentralisasi logic (base logic)
 * - menjadikan kontrak desain arsitekture.
 */

abstract class Buah
{
    private $warna;

    // interface/method abstract;
    abstract public function makan();
}

class Apel extends Buah
{
    public function makan()
    {
        // TODO: Implement makan() method.
    }
}

abstract class Produk
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

    abstract public function getLabelProduct();

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
    public function getLabelProduct()
    {
        return $this->getLabel() . " | {$this->jumlahHalaman} Halaman";
    }
    
}

$naruto = new Buku(
    "Naruto Shippuden Vol 1",
    "Kishimoto. M",
    120000,
    "Shonen Jump",
    600
);

echo $naruto->getLabelProduct();

echo "<hr>";
