<?php

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
