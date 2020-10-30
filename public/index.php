<?php
var_dump($_SERVER['REQUEST_URI']);
ini_set('display_errors', 1);
include '../vendor/autoload.php';
\Core\Route::start();