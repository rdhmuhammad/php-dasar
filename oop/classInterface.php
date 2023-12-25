<?php
/*
 * Class interface adalah
 * Class abstract yang tidak punya implementasi
 * Murni merupakan template kelar turunan, dan tidak boleh punya property
 * Semua method harus didefinisikan public
 * Boleh deklarasi construct di interaface, untuk mewajibkan semua child punya consctruct
 * satu kelas boleh implement banyak interface.
 * bisa melakukan depedency injection jika melakukan type-hinting.
 * Dapat mencapai polimorphism.
 */

interface Buah
{
    public function makan();

    public function setWarna($warna);
}

interface Makanan
{
    public function getKapanBasi();
}

class Apel implements Buah, Makanan
{
    protected $warna;

    public function makan()
    {
        // TODO: Implement makan() method.
    }

    public function setWarna($warna)
    {
        $this->warna = $warna;
        // TODO: Implement setWarna() method.
    }

    public function getKapanBasi()
    {
        // TODO: Implement getKapanBasi() method.
    }
}
