<?php
require_once __DIR__ . "/vendor/autoload.php";

//interface Bird
//{
//    public function eat();
//    public function fly();
//}
//
//class Swallow implements Bird
//{
//    public function eat() {}
//    public function fly() {}
//}
//
//class Ostrich implements Bird
//{
//    public function eat() {}
//    public function fly() { /* exception */ }
//}

interface BirdEat
{
    public function eat();
}

interface BirdFly
{
    public function fly();
}

class Swallow implements BirdEat
{
    public function eat()
    {
    }

    public function fly()
    {
    }
}

class Ostrich implements BirdEat
{
    public function eat()
    {
    }
}