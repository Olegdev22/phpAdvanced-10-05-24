<?php
require_once __DIR__ . "/vendor/autoload.php";

//class Product
//{
//    public function get(name) {
//    }
//
//    public function set(name, value) {
//    }
//
//    public function save()
//    {
//    }
//
//    public function update()
//    {
//    }
//
//    public function delete()
//    {
//    }
//
//    public function show()
//    {
//    }
//
//    public function print()
//    {
//    }
//}

class Product
{
    public function get($name)
    {
    }

    public function set($name, $value)
    {
    }
}

class WorkProduct extends Product
{
    public function save()
    {
    }

    public function update()
    {
    }

    public function delete()
    {
    }
}

class ShowProduct extends Product
{
    public function show()
    {
    }

    public function print()
    {
    }
}

