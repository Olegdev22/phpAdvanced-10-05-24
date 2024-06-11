<?php

namespace App;


class Developer extends Worker // более абстрактный класс
{
    use HasRest;
    protected string $position = 'developer';
    public function work(): void // переопределили метод
    {
        print_r("I'm a developing!!");
    }

    public function __call(string $name, array $arguments)
    {
        echo "A known method {$name}() is called.<br>";
        var_dump($arguments);
    }
}