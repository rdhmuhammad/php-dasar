<?php
/*
 * Pengulangan
 * for
 * while
 * do.. while
 * foreach: khusus ke suatu array
 *
 */

for ($i = 10; $i > 0; $i--) {
    for ($j = 10; $j > $i; $j--) {
        echo "*";
    }
    echo "<br>";
}
for ($i = 0; $i < 10; $i++) {
    for ($j = $i; $j < 10; $j++) {
        echo "*";
    }
    echo "<br>";
}

$yoi = true;
$x = 0;
while ($yoi){
    echo "yoi"."<br>";
    $x++;
    if ($x > 10){
        $yoi = false;
    }
}
$i = 0;
do {
    echo "masuk"."<br>";
    $i++;
} while($i < 5);