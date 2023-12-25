<?php
global $conn;
require "repository.php";
require "util.php";

getUserSession();

$query = "SELECT * FROM kassir_branches";
$totalQuery = "SELECT COUNT(*) FROM kassir_branches";
if (isset($_POST["cari"]) && $_POST["keyword"] != "") {
    $query .= " where name like " . "'%" . $_POST["keyword"] . "%'";
    $totalQuery .= " where name like " . "'%" . $_POST["keyword"] . "%'";
}
$perPage = 5;
$totalData = runQuery($totalQuery);
$totalData = (int)$totalData[0]["COUNT(*)"];
// always round up;
$totalPage = ceil($totalData / $perPage);
$page = isset($_GET["halaman"]) ? $_GET["halaman"] : 1;
$limit = ($perPage * $page) - $perPage;
$query .= " limit $limit, $perPage";

$branches = runQuery($query);

?>
<!DOCTYPE html>
<html>
<head>
    <title>Cabang Info</title>
    <script src="js/jquery-3.7.1-min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>
<h1>Daftar Cabang</h1>
<a href="tambah.php">Tambah data baru</a>
<br>
<a href="?page=<?= $page ?>">&lt;</a>
<?php for ($j = 1; $j <= $totalPage; $j++) : ?>
    <?php if ($j == $page): ?>
        <a href="?halaman=<?= $j; ?>" style="color: #1E4B6D;font-style: oblique"><?= $j ?></a>
    <?php else: ?>
        <a href="?halaman=<?= $j; ?>"><?= $j ?></a>
    <?php endif; ?>
<?php endfor; ?>
<form action="" method="post">
    <input id="keyword" name="keyword" type="text" autofocus placeholder="masukan keyword pencarian" autocomplete="off">
    <button id="cari" type="submit" name="cari">Cari</button>
</form>
<img id="loader" src="resource/03-42-11-849_512.gif"    style="width: 100px;position: absolute;display: none" >
<div id="container">
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
                    <a href="ubah.php?id=<?= $branch['id'] ?>">Ubah</a> |
                    <a href="hapus.php?id=<?= $branch['id'] ?>" onclick="return confirm('apakah anda yakin')">Hapus</a>
                </td>
                <td><img src="<?= $branch["image_url"] ?>" width="100"></td>
                <td><?= $branch["name"] ?></td>
                <td><?= $branch["address"] ?></td>
            </tr>
            <?php $i++ ?>
        <?php endforeach; ?>
    </table>
</div>
<a href="logout.php">Keluar</a>
</body>
</html>