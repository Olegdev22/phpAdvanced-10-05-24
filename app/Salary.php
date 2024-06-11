<?php

namespace App;

class Salary
{
    static public int $totalHours;
    static public function count(array $salary): int
    {
        self::$totalHours = array_sum($salary);
        return self::$totalHours * 2000;
    }
}