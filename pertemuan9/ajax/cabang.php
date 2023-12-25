<?php
global $conn;
require '../repository.php';
require "../util.php";

getUserSession();

$query = "SELECT * FROM kassir_branches";
$totalQuery = "SELECT COUNT(*) FROM kassir_branches";
if ($_GET["keyword"] != "") {
    $query .= " where name like " . "'%" . $_GET["keyword"] . "%'";
    $totalQuery .= " where name like " . "'%" . $_GET["keyword"] . "%'";
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
                <a href="../ubah.php?id=<?= $branch['id'] ?>">Ubah</a> |
                <a href="../hapus.php?id=<?= $branch['id'] ?>" onclick="return confirm('apakah anda yakin')">Hapus</a>
            </td>
            <td><img src="<?= $branch["image_url"] ?>" width="100"></td>
            <td><?= $branch["name"] ?></td>
            <td><?= $branch["address"] ?></td>
        </tr>
        <?php $i++ ?>
    <?php endforeach; ?>
</table>

