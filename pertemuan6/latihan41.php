<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
<?php
// check if submit button have been click or not
if (isset($_POST["submit"])) :?>
    <h1>Selamat Datang <?= ucwords(strtolower($_POST["nama"])) ?>! </h1>
<?php endif; ?>
</body>
</html>