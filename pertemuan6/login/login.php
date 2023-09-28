<?php

// check if submit button has been clicked
if (isset($_POST["submit"])) {
    // check username & password
    if ($_POST["username"] === "admin" && $_POST["password"] === "123") {
        header("Location: admin.php");
    } else {
        $error = true;
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
<h1>Login Admin</h1>
<p style="color: red; font-style: italic"><?= isset($error) ? $error ? "Username / password anda salah" : "" : "" ?> </p>
<ul>
    <form method="post">
        <li>
            <!-- for to add label to tag with a id-->
            <label for="username">Username :</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password">
        </li>
        <li>
            <button type="submit" name="submit">Login</button>
        </li>
    </form>
</ul>
</body>
</html>