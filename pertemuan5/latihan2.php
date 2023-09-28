<?php
// Pengulangan Pada Array
/*
 * - for
 * - foreach
 */

$mahasiswa = ["ridho", "doni", "dodi", "didi", "dina", "dani", "dika"];
$dataMahasiswa = [
    ["Ridho", 23, true],
    ["Doni", 21, false],
    ["Didi", 25, true],
    ["Dika", 28, true],
]
?>

<!DOCTYPE html>
<html>
<head>
    <title>latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: palevioletred;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>
<?php for ($i = 0; $i < count($mahasiswa); $i++) : ?>
    <div class="kotak"><?= $mahasiswa[$i]; ?></div>
<?php endfor; ?>
<div class="clear"></div>
<?php foreach ($mahasiswa as $mh) : ?>
    <div class="kotak"><?= $mh; ?></div>
<?php endforeach; ?>
<br>
<table>
    <tr>
        <td>Nama</td>
        <td>Umur</td>
        <td>Berkerja</td>
    </tr>
    <?php foreach ($dataMahasiswa as $dt) : ?>
        <tr>
            <?php foreach ($dt as $d) : ?>
                <td><?php echo gettype($d) == "boolean" ? ($d ? "Benar" : "Salah") : $d ?></td>
            <?php endforeach; ?>
        </tr>
    <?php endforeach; ?>
</table>
</body>
</html>
