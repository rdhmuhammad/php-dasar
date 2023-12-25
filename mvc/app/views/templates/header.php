<?php
?>

<!DOCTYPE html>
<head>
    <title>Halaman <?= $data["judul"] ?></title>
    <link rel="stylesheet" href="<?= BASEURL; ?>/css/bootstrap.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">PHP MVC</a>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav mb-2 mb-lg-0">
                <a class="nav-link active" aria-current="page" href="<?=BASEURL?>">Home</a>
                <a class="nav-link" href="<?=BASEURL?>/mahasiswa">Mahasiswa</a>
                <a class="nav-link" href="<?=BASEURL?>/about/bio">About</a>
            </div>
        </div>
    </div>
</nav>
