<?php
require "repository.php";
global $conn;

if (isset($_POST["register"])) {
    $userData = [];
    $userData["username"] = stripslashes(strtolower($_POST["username"]));

    if ($result = runQuery(sprintf("SELECT count(id) FROM kassir_users where username = '%s'", $userData["username"]))){

        if ($result > 0){
            echo "
            <script>
                alert('username telah digunakan!');
            </script>
        ";
        }
    }

    /*
     * Password encrytion
     * - old way using md5, its easy to crack because we can generated it without secret key.
     * - PHP.5 using password_hash (default is using bcrypt);
     */

    $userData["password"] = mysqli_real_escape_string($conn, $_POST["password"]);
    $userData["passwordConfirm"] = mysqli_real_escape_string($conn, $_POST["passwordConfirm"]);
    if ($userData["password"] !== $userData["passwordConfirm"]){
        echo "
            <script>
                alert('password tidak cocok!');
                </script>
        ";
    }
    $userData["password"] = password_hash($userData["password"], PASSWORD_DEFAULT);

    $result = runQuery(
        sprintf(
            "INSERT into kassir_users (`username`, `password`, `role_id`, `email`, `name`, `phone`)
             values ('%s', '%s', 1, 'test@gmail.com', 'ridho', '08218888888')",
            $userData["username"],
            $userData["password"]
        )
    );

    if ($result || mysqli_affected_rows($conn)>0){
        echo "
            <script>
                alert('registrasi berasil!');
                document.location.href = 'login.php';
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
    <title>Halaman Register</title>
    <style>
        label {
            display: block;
        }
    </style>
</head>
<body>
<h1>Halaman Register</h1>
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
            <label for="passwordConfirm">Repeat Password :</label>
            <input type="password" name="passwordConfirm" id="passwordConfirm">
        </li>
        <li>
            <button type="submit" name="register">Register</button>
        </li>
    </ul>
</form>
</body>
</html>