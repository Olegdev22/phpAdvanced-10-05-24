<?php

namespace App;


class Designer extends Worker // более абстрактный класс
{
    use HasRest;
    protected string $position = 'developer';
    public function work(): void // переопределили метод
    {
        print_r("I'm a designer!!");
    }
}