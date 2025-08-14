<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Routing::get('', 'DefaultController');
Routing::post('register', 'SecurityController');
Routing::get('login', 'DefaultController');
Routing::post('login', 'SecurityController');
Routing::get('dashboard', 'DefaultController');
Routing::run($path);