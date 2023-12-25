<?php

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
