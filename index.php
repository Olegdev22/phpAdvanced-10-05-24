<?php
require_once  "vendor/autoload.php";

$dsn = "mysql:host=database;dbname=phpPro_10.05.24";

try {
    $pdo = new PDO($dsn, 'root', '123456');
} catch (PDOException $e) {
    dd($e);
}