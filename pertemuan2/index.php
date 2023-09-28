<?php
// komentar
/*
 * komentar banyak baris
 */

// Standar Output
/*
 * echo, print
 * print_r ( untuk array)
 * var_dump ( untuk melihat isi variable )
 * var_dump dan print_r untuk debugging.
 */
echo "Ridho "."<br>";
echo 'Ridho'."<br>";
print("Muhammad")."<br>";
print "Backend"."<br>";
print_r("with print r")."<br>";
var_dump("with var dump")."<br>";
echo false."<br>";

// Penulisan sintaks php
/*
 * 1. PHP di dalam HTML
 * 2. HTML di dalam PHP
   <!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Belajar PHP</title>
        </head>
        <body>
            <h1>Halo selamat datang <?php echo "Ridho Muhammad";?> </h1>
        </body>
    </html>
 */
// variable tidak boleh start dengan angka.
$name = "Ridho Muhammad";
echo $name."<br>";
/*
 * Note: kutip dua better dari pada kutip satu,
 * karena kutip dua bisa menggunakan interpolasi ( mengecheck dalam string terdapat variable?, jika ada maka akan print isi variable)
 */
echo "Halo nama saya $name"."<br>";
echo 'halo nama saya $name'."<br>";

/*
 * Operator Arimatik
 * + - / *
 */
echo 2+3;
echo "<br>";

/*
 * String Operator
 * . ( dot )
 */

$namaDepan = "Ridho";
$namaBelakang = "Muhammad";
echo $namaBelakang." ".$namaBelakang."<br>";

/*
 * Operator Assignment;
 * =, +=, -=, *=, /=, %=, .=
 */
$x = 1;
$x += 2;
$x -= 1;
$x /=3;
echo $x."<br>";
$name = "Ridho";
$name .= " ";
$name .= "Muhammad";
$name .= "<br>";
echo $name;

/*
 * Operator Perbandingan
 * <, >, <=, >=, ==, != (only check value not the data type)
 * Operator Identitas
 * ===, !==
 */

var_dump(1 < 5);
echo "<br>";
var_dump(1 === "1");

/*
 * Operator Logika
 * &&, ||, !
 */
$y = 30;
echo "<br>";
var_dump($y < 20 || $y % 2 == 0);

?>