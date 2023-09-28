<?php
/*
 * Note: The closing tag of a PHP block at the end of a file is optional,
     * and in some cases omitting it is helpful when using include or require,
     * so unwanted whitespace will not occur at the end of files,
     * and you will still be able to add headers to the response later.
     * It is also handy if you use output buffering, and would not like
     * to see added unwanted whitespace at the end of the parts
     * generated by the included files.
 */

/*
 * Function
 * builtin function -> https://www.php.net/manual/en/funcref.php
 * user-define function
 *
 */

// frequently used builtint function
/*
 * Date/time
 * - time()
 * - date()
 * - mktime()
 * - strtotime()
 */

echo date("Y-m-d", time());
echo "<br>";
// UNIX Timestamp / EPOCH time ( detik yang telah berlalu sejak 1 january 1970 )
echo time();
echo "<br>";
$newDate = mktime(23, 49, 0, 12, 31, 2023);
echo date("D, Y-m-d", $newDate);
echo "<br>";
echo $newDate < time();
echo "<br>";

echo strtotime("23 Augh 2023");

/*
 * String
 * - strlen()
 * - strcmp() - comparing string
 * - explode() - to slice a string to be array
 * - htmlspecialchars() - to prevent injection html.
 */

/*
 * Utility
 * - var_dump()
 * - isset() - to check is variable have been created;
 * - empty() - to check if variable is empty;
 * - die() - to stop program, it will stop execution at its lines.
 * - sleep() - to give signal delay of execution
 */