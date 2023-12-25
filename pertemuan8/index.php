<?php
global $conn;
require "repository.php";

$branches = runQuery("SELECT * FROM kassir_branches");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Cabang Info</title>
</head>
<body>
<h1>Daftar Cabang</h1>
<a href="tambah.php">Tambah data baru</a>
<br>
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>Alamat</th>
    </tr>
    <?php $i = 1 ?>
    <?php foreach ($branches as $branch) : ?>
        <tr>
            <td><?= $i ?></td>
            <td>
                <a href="">Ubah</a> |
                <a href="hapus.php?id=<?= $branch['id']?>" onclick="return confirm('apakah anda yakin')">Hapus</a>
            </td>
            <td><img src="<?= $branch["image_url"] ?>" width="100"></td>
            <td><?= $branch["name"] ?></td>
            <td><?= $branch["address"] ?></td>
        </tr>
        <?php $i++ ?>
    <?php endforeach; ?>
</table>
</body>
</html>