<?php
/*
 * User Define Function
 */

function salam()
{
    $ktp = $_POST['pilihKtp'];
    return $ktp;
}

function posisi($lokasi, $isOtw = true)
{
    return "Gue lagi di $lokasi, ini lagi mau " . ($isOtw ? "otw" : "nyebat");
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>
        latihan function
    </title>
</head>
<body>
<form method="POST" name="pilihKtp">
    <label for="pilihKtp">Ktp mu ndi</label>
    <select name="pilihKtp" id="pilihKtp">
        <option value="Pagi lurr">jogja</option>
        <option value="Yo da">padang</option>
    </select>
    <input type="submit" value="Pilih">
</form>


<h1><?php echo salam() ?> </h1>
<br>
<h1><?php echo posisi("rumah") ?></h1>
</body>
</html>
