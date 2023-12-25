<?php
require_once './App/init.php';
use App\Produk\Buku as Buku;
use App\Service\User as UserService;
use App\Produk\User as UserProduct;

$naruto = new Buku(
    "Naruto Shippuden Vol 1",
    "Kishimoto. M",
    120000,
    "Shonen Jump",
    600
);

echo $naruto->getLabelProduct();

echo "<hr>";

new UserService();
echo "<br>";
new UserProduct();