<?php
require_once __DIR__ . "/vendor/autoload.php";
echo "hello";

$dsn = "mysql:host=database;database=phpPro_10.05.24";

try {
   $pdo = new PDO($dsn, 'root', '123456');
   dd($pdo);
} catch (PDOException $exception) {
   dd($exception);
}