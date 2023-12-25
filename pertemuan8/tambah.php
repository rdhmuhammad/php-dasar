<?php
global $conn;
require "repository.php";
// check apakah tombol submit telah di klik
// note: key on $_POST is tag property name on form child or its self
if (isset($_POST["submit"])){
    // ambil data dari form
    $userData = [];
    $userData["name"] = htmlspecialchars($_POST["name"]);
    $userData["address"] =  htmlspecialchars($_POST["address"]);
    $userData["imageUrl"] = htmlspecialchars($_POST["imageUrl"]);

    $query = sprintf("insert into kassir_branches
            (`name`, `address`, `image_url`, `branch_number`, `owner_id`, `master_regencies_id`)
            values
            ( '%s', '%s', '%s', 1, 17, 2);",
            $userData["name"],
            $userData["address"] ,
            $userData["imageUrl"]
    );
    $result = runQuery($query);
    var_dump($result);
    if ($result || mysqli_affected_rows($conn)>0){
        echo "
            <script>
                alert('data berasil ditambahkan!');
                document.location.href = 'index.php';
            </script>
        ";
    }else{
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
    <title>Tambah Cabang</title>
</head>
<body>
<h1>Tambah Cabang Baru</h1>
<form action="" method="post">
    <ul>
        <li>
            <label for="name">Nama :</label>
            <input id="name" type="text" name="name">
        </li>
        <li>
            <label for="imageUrl">ImageUrl :</label>
            <input id="imageUrl" type="text" name="imageUrl">
        </li>
        <li>
            <label for="address">Address :</label>
            <input id="address" type="text" name="address">
        </li>
        <li>
        <!--using button instead of input with type button because its outdated-->
            <button type="submit" name="submit">Tambah Data</button>
        </li>
    </ul>
</form>
</body>
</html>