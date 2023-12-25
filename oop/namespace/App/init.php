<?php

// this is the proccess of autoload
spl_autoload_register(function ($class) {
    $class = explode("\\", $class);
    $class = end($class);
    $modules = ["Produk", "Service"];
    foreach ($modules as $md) {
        $source = __DIR__ . "/{$md}/" . $class . ".php";
        if (file_exists($source)) {
            require_once $source;
        }
    }
});

//// this is the proccess of autoload
//spl_autoload_register(function ($class) {
//    $class = explode("\\", $class);
//    $class = end($class);
//    require_once __DIR__ . '/Service/' . $class . ".php";
//});