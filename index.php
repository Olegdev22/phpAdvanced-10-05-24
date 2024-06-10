<?php

require_once "vendor/autoload.php";

use App\Controllers\UsersController;
use App\Controllers\Api\UsersController as ApiUsersController;
use MyLib\LibraryClass;

$controller = new UsersController();
$controller();

$apiController =  new ApiUsersController();

$lib = new LibraryClass();

sayHello();