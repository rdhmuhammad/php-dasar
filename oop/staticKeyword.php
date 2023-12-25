<?php

/*
 * Static Keyword means, member is bound with class, not object.
 * Static value is continue, event if object instantiate couple times.
 * - eg on StaticContinue();
 * kode menjadi seolah" procedural;
 * - biasa digunakan pada helper;
 * - di class utility pada framework;
 */

class ContohStatic
{
    public static $angka = 1;

    public static function increment()
    {
        return "Nomor Ke " . self::$angka++;
    }

    public static function hello()
    {
        //this hanya berlaku ketika class di instansiasi jadi object

        return "hello" . " " . self::$angka;
    }
}

echo ContohStatic::hello();
echo "<br>";
echo ContohStatic::increment();
echo "<hr>";
echo ContohStatic::increment();
echo "<hr>";
echo ContohStatic::increment();
echo "<hr>";

class StaticContinue
{
    public static $angka = 1;

    public function cetak()
    {
        return "static angka = " . self::$angka++;
    }
}

$con1 = new StaticContinue();
$con2 = new StaticContinue();

echo "<br>";
echo $con1->cetak();
echo "<br>";
echo $con1->cetak();
echo "<br>";
echo $con1->cetak();
echo "<hr>";
echo $con2->cetak();
echo "<br>";
echo $con2->cetak();
echo "<br>";
echo $con2->cetak();

/*
 * Constant
 * - identifier to store a value which immutable.
 * to define constant are using
 * - define()
 * - const
 *
 * Magic Constant - a builtin constant define by php
 * __LINE__
 * __FILE__
 * __DIR__
 * __FUNCTION_
 * __CLASS__
 * __TRAIT__
 * __METHOD__
 * __NAMESPACE__
 */

// define can't be save to class. only for global usage.
define('URL_BE', 'http://localhost:3000');
// can use, inside class.
const URL_FE = "http://localhost:3004";

class Service
{
    const URL_BE = "http://localhost:3002";
}

echo "<br>";

// magic constant
//show the line of code;
echo __LINE__;
echo "<br>";
// show the dir of the php file.
echo __FILE__;
echo "<br>";
echo __DIR__;
echo "<br>";

function checkFuncName()
{
    return __FUNCTION__;
}

echo checkFuncName();
echo "<br>";

class ClassConst
{
    public $class = __CLASS__;
}

$obj1 = new  ClassConst();
echo $obj1->class;


echo "<hr>";
echo Service::URL_BE;
echo "<br>";
echo URL_BE;
echo "<br>";
echo URL_FE;