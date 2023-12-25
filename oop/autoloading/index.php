<?php

require_once 'App/init.php';

$naruto = new Buku(
    "Naruto Shippuden Vol 1",
    "Kishimoto. M",
    120000,
    "Shonen Jump",
    600
);

echo $naruto->getLabelProduct();

echo "<hr>";