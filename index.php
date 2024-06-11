<?php

use App\Designer;
use App\Developer;
use App\Salary;

require_once "vendor/autoload.php";

$developer = new Developer('Boris', 20, [5 ,6 ,10]);
$designer = new Designer('Olya', 19, [5 ,6 ,10]);

$workers = [$developer, $designer];

$salary = Salary::count($developer->getHours());
var_dump(Salary::$totalHours);

$developer->aknownMethod('fgfg');

// Абстракция - если есть общие методы и свойства, то выносить в отдельный класс

// Инкапсуляция - когда свойства приватные и рдоступ к ним через геттер и сеттер.
// Избежать задания новых св-йств при обращении к классу

//  Наследование - можно от абстрактного класса, максимальная поддержка кода при расширении

// Полиморфизм - обращение к одному методу с разной реализацией
foreach ($workers as $worker) {
    $worker->work();
}