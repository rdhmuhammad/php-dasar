<?php
require 'repository.php';
global $conn;
session_start();

$errLabel = "";

function login()
{
    global $errLabel;
    if (isset($_POST["login"])) {
        $user = [];
        try {
            $user = runQuery(sprintf("select * from kassir_users where username = '%s'", $_POST["username"]));
        } catch (ErrorException $e) {
            $errLabel = "<h1 style='color: red;font-size: 30px'>Error</h1>";
            return false;
        }

        if (count($user) < 1) {
            $errLabel = "<h1 style='color: red;font-size: 30px'>Ra nemu</h1>";
            return false;
        }


        if (!password_verify($_POST["password"], $user[0]["password"])) {
            $errLabel = "<h1 style='color: red;font-size: 30px'>Password Salah</h1>";
            return false;
        }
        if (isset($_POST["rememberMe"])){
            setcookie("login", "true", time()+60);
            return true;
        }
        $_SESSION["user"] = ["username"=>$_POST["username"], "active"=>true];
        return true;
    }
}

login();
echo "
        <script>
            document.location.href = 'index.php';
        </script>
    ";

?>

<!DOCTYPE html>
<html>
<head>
    <?= $errLabel ?>
    <title>Halaman Login</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
<h1>Halaman Login</h1>
<form action="" method="post">
    <ul>
        <li>
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <label for="rememberMe">Remember Me :</label>
            <input type="checkbox" name="rememberMe" id="rememberMe">
        </li>
        <li>
            <button type="submit" name="login">Login</button>
        </li>
    </ul>
</form>
</body>
</html>