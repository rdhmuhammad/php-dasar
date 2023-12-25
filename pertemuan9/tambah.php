<?php
global $conn;
require "repository.php";
require "util.php";
/*
 * when we run form submit which is will make http request to php.
 * PHP will treat the request body as follow
 * - $_POST only store a data that encode as application/json such as string, number, boolean.
 * - $_FILES will directly store all data that encode multipart-form data which is BLOP.
 *  - data scturecte of FILES is 2 Dimensional Assocative array.
 *      - key is key name from input
 *      - value is actual data which also asso array. the key explained as follow.
 *          - name = filename
 *          - type = file type
 *          - tmp_name = is dir where file is temporary located after hit submit (this is where we goint to use move_uploaded_file())
 *          - error = if there is error it will return (err == 0 = no error, err > 0 = error, eg. err = 4 (error no file uploaded))
 *          - size = size file on bytes.
 */
// check apakah tombol submit telah di klik
// note: key on $_POST is tag property name on form child or its self

getUserSession();

if (isset($_POST["submit"])){
    // ambil data dari form
    $userData = [];

    $userData["name"] = htmlspecialchars($_POST["name"]);
    $userData["address"] =  htmlspecialchars($_POST["address"]);
    if ($imageUrl = uploadFile($_FILES["imageUrl"])){
        $userData["imageUrl"] = $imageUrl;
    }
    $query = sprintf("insert into kassir_branches
            (`name`, `address`, `image_url`, `branch_number`, `owner_id`, `master_regencies_id`)
            values
            ( '%s', '%s', '%s', 1, 17, 2);",
            $userData["name"],
            $userData["address"] ,
            $userData["imageUrl"]
    );
    $result = runQuery($query);
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
<!-- enctype will add header content type to request-->
<form action="" method="post" enctype="multipart/form-data">
    <ul>
        <li>
            <label for="name">Nama :</label>
            <input id="name" type="text" name="name">
        </li>
        <li>
            <label for="imageUrl">Image :</label>
            <input id="imageUrl" type="file" name="imageUrl">
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