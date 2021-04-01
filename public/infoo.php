<?php
require __DIR__.'/../vendor/autoload.php';
var_dump(opcache_get_status()['jit']);

use DarkGhostHunter\Preloader\Preloader;

Preloader::make()->writeTo(__DIR__.'/preloader.php');

phpinfo();