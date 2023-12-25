<?php
global $conn;
require "repository.php";
require "util.php";

getUserSession();

$branchDetail = runQuery("select * from kassir_branches where id =" . $_GET["id"])[0];
if (!$branchDetail) {
    echo "<h1>Data tidak ditemukan</h1><br><a href='index.php'>Kembali ke home</a>";
    exit;
}
if (isset($_POST["submit"])) {
    $userData = [];
    $userData["id"] = $_POST["id"];
    $userData["name"] = htmlspecialchars($_POST["name"]);
    $userData["address"] = htmlspecialchars($_POST["address"]);

    if ($_FILES["imageUrl"]["error"] !== 4){
        if ($img = uploadFile($_FILES["imageUrl"])){
            $userData["imageUrl"] = $img;
        }
    }else{
        $userData["imageUrl"] = $_POST["imageValue"];
    }


    $query = sprintf("update kassir_branches set
            `name`='%s', `address`='%s', `image_url`='%s'
             where id = %d;",
        $userData["name"],
        $userData["address"],
        $userData["imageUrl"],
        (int)$userData["id"]
    );
    $result = runQuery($query);
    var_dump($result);
    if ($result || mysqli_affected_rows($conn) > 0) {
        echo "
            <script>
                alert('data berasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('data gagal ditambahkan!');
            </script>
        ";
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Ubah Data Cabang</title>
</head>
<body>
<h1>Ubah Cabang Baru</h1>
<form action="" method="post" enctype="multipart/form-data">
    <ul>
        <li>
            <input type="hidden" name="id" value="<?= $branchDetail['id']; ?>">
            <label for="name">Nama :</label>
            <input id="name" type="text" name="name" value="<?= $branchDetail['name']; ?> ">
        </li>
        <li>
            <img src="<?= $branchDetail['image_url']?>" width="150">
            <input type="hidden" name="imageValue" value="<?= $branchDetail['image_url']?>">
        </li>
        <li>
            <label for="imageUrl">ImageUrl :</label>
            <input id="imageUrl" type="file" name="imageUrl">
        </li>
        <li>
            <label for="address">Address :</label>
            <input id="address" type="text" name="address" value="<?= $branchDetail['address']; ?>">
        </li>
        <li>
            <!--using button instead of input with type button because its outdated-->
            <button type="submit" name="submit">Tambah Data</button>
        </li>
    </ul>
</form>
</body>
</html>