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
<p><?= $mahasiswa[0]["nama"] ?></p>
<?php foreach ($mahasiswa as $ms) : ?>
    <ul>
        <?php foreach ($ms as $key => $m): ?>
            <?php if (strtolower($key) === "pict") : ?>
                <li>
                    <img class="profilPic" src="resources/<?= $m ?>">
                </li>
            <?php else: ?>
                <li><?= ucwords($key) . " : " . $m ?></li>
            <?php endif ?>
        <?php endforeach; ?>
    </ul>
<?php endforeach; ?>
</body>
</html>
