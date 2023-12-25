<?php

// this is the proccess of autoload
spl_autoload_register(function ($class) {
    require_once 'Produk/' . $class . ".php";
});