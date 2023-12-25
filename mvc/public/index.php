<?php

/*
 * MVC ( Model-View-Controller)
 * Pola arsitekture pada perancangan perangkat lunak
 * dalam OOP.
 * Tujuan nya
 * - memisahkan data dan proses.
 * - low effort maintenance
 *
 * ketika awal dibuka index.php maka akan menampilkan controller default yang menampilkan method default
 * menggunakan .htaccess
 */

// bootstrapping technique.
// only call one file that will call all depedency.
require_once "../app/init.php";


$app = new App();