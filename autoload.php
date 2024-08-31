<?php

spl_autoload_register(function ($class){
    $base_dir = __DIR__ . '/';

    $class = str_replace('\\', '/', $class);
    
    $file = $base_dir . $class . ".php";

    include $file;
});