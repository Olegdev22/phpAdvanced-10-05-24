<?php

// описание метода с реализацией. Избежание дублирования кода
trait HasRest
{
    public function rest()
    {
        print_r($this->getPosition() . 'has rest');
    }
}