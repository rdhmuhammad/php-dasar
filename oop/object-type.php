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

class CetakInfoProduk
{
    // using object type, a object become data type
    public function cetak(Produk $produk)
    {
        return "{$produk->judul} | {$produk->penulis}, {$produk->penerbit}. Rp. {$produk->harga}";
    }
}

$naruto = new Produk(
    "Naruto Shippuden Vol 1",
    "Kishimoto. M",
    120000,
    "Shonen Jump"
);

$naruto->getLabel();
echo "<br>";
$cetak = new CetakInfoProduk();
echo $cetak->cetak($naruto);