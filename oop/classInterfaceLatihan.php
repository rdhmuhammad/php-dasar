<?php


interface InfoProduk
{
    public function getLabelProduct();
}

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
    protected $judul,
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

   abstract function getLabel();
}

class Buku extends Produk implements InfoProduk
{
    public $jumlahHalaman;

//    using overriding
    public function __construct($judul, $penulis, $harga, $penerbit, $jumlahHalaman)
    {
        $this->jumlahHalaman = $jumlahHalaman;
        parent::__construct($judul, $penulis, $harga, $penerbit);
    }

    function getLabel()
    {
        return "{$this->judul} | {$this->penulis}, {$this->penerbit}. Rp. {$this->harga}";
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