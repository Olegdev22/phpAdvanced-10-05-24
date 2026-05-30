<?php

use App\Controllers\TestController;
use Core\Router;

dd(Router::put('api/resource/{id:\d}/update')->controller(TestController::class)->action('index'));

