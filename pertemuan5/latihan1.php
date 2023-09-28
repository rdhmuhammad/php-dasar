<?php

// Array

// Cara lama, < 5.4
$hari = array("Senin", "Selasa");
$bulan = ["Januari", "Februari"];
$user1 = ["Ridho", 21, false, function () {
}];

// Menampilkan Array
var_dump($bulan);
echo "<br>";
print_r($bulan);
echo "<br>";
echo $bulan[1];

// Menambahkan Array
$hari[] = "Rabu";