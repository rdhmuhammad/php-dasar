<?php
/*
 * Property
 *  - variable di dalam object/ member variable
 *  - to define property
 *  - [visibility] variableName, eg. private $nama = "";
 */

/*
 * Method
 * - function didalam object.
 * - [visibility] function name(), eg. private function getToken
 * - function name(), eg. function test() **the visibility as default is public
 */

class Mobil{
    public $nama;
    public $warna;
    public $harga;

    function getNama(){

    }

    private function setNama(){}
}