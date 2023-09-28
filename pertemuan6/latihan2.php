<?php

// Array Associative
/*
 * Key is a string user-defined
 */
$mahasiswa = [
    [
        "pict" => "img.png",
        "nama" => "Ridho",
        "npm" => "R2334D",
        "jurusan" => "Teknik Informatika",
        "email" => "ridho@email.com"
    ],
    [
        "pict" => "img_1.png",
        "nama" => "Alvin",
        "npm" => "R4564D",
        "jurusan" => "Teknik Informatika",
        "email" => "alvin@email.com"]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>data mahasiswa</title>
    <style>
        .profilPic {
            width: 100px;
            height: 100px;
            object-fit: cover;
            background-position: center center;
            background-repeat: no-repeat;
        }
    </style>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
<?php foreach ($mahasiswa as $ms) : ?>
    <ul>
        <a href="latihan3.php?nama=<?= $ms["nama"] ?>&gambar=<?= $ms["pict"] ?> ">
            <li><img class="profilPic" src="./resources/<?= $ms["pict"] ?>"></li>
            <li>
                <?= $ms["nama"] ?>
            </li>
        </a>
    </ul>
<?php endforeach; ?>
</body>
</html>
