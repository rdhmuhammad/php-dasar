<?php

$x = 10;
// global variable
function tampilX()
{
    global $x;
    echo $x;
}

tampilX();

// SuperGlobals
/*
 * is variable that define by php, and can access globally,
 * all of them are, associative array
 * - $_POST
 * - $_GET
 * - $_REQUEST
 * - $_SESSION
 * - $_COOKIE
 * - $_SERVER
 * - $_ENV
 */
echo "<br>";
var_dump($_SERVER);
echo "<br>";
echo $_SERVER["SERVER_NAME"];
// GET
/*
 * its associate with url query params, when add new query param it will automatically appended to $_GET
 */
$_GET["name"] = "Ridho";
echo "<br>";
var_dump($_GET);
