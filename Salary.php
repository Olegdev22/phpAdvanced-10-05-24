<?php

class Salary
{
    static public function count(array $hours):int
    {
        return array_sum($hours) * 2000;
    }
}

//$salary = new Salary()::count($developer->getPosition());
