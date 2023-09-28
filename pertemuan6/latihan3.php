<?php
// isset check if variable have been created or not yet;
if (!isset($_GET["nama"]) || !isset($_GET["gambar"])) {
    // redirect
    header("Location: latihan2.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Detail</title>
</head>
<body>
<ul>
    <li><img src="resources/<?= $_GET["gambar"] ?> "/></li>
    <li><?= $_GET["nama"] ?> </li>
</ul>
<a href="latihan2.php">Kembali ke daftar mahasiswa</a>
</body>
</html>
