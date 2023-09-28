<?php
/*
 * connection to mysql with php could with
 * extension MySQL (depecreted)
 * extension MySQLi (new)
 * PDO (PHP Data Object) - driver to connect to any database which is technology-agnostic.
 */
global $conn;
require "repository.php";

// koneksi kedatabase
if (!$conn) {
    echo "error db connection";
}

// query data branch;
// return = if succes will return boolean or query result
//$queryRes = mysqli_query($conn, "select * from kassir_branches;");
//if (!$queryRes) {
//    echo mysqli_error($conn);
//}

// ambil data dari object results (fetch)
/*
 * mysqli_fetch_row() // only return one row and data is array numeric of one row
 * mysqli_fetch_assoc() // data as array associative
 * mysqli_fetch_array() // return as array assocative and array numeric (more dynamic but wasted memory)
 * mysqli_fetch_object()
 */
//$branch = mysqli_fetch_object($queryRes);
//var_dump($branch);
// var_dump($branch->name); // accessing object field

// fetch all data
//while ($branch = mysqli_fetch_assoc($queryRes)) {
//    echo "<br>";
//    var_dump($branch["name"]);
//}

$branches = runQuery("SELECT * FROM kassir_branches");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Cabang Info</title>
</head>
<body>
<h1>Daftar Cabang</h1>
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
                <a href="">Hapus</a>
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