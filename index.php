<?php
require_once "vendor/autoload.php";

class User
{
    private string $name;
    private string $age;
    private string $email;
/*
     public function __construct($name, $age, $email)
      {
          $this->name = $name;
          $this->age = $age;
          $this->email = $email;
      }*/


    private function getName(): string
    {
        return $this->name;
    }

    private function setName($name): void
    {
        $this->name = $name;
    }


    private function getAge(): int
    {
        return $this->age;
    }

    private function setAge($age): void
    {
        $this->age = $age;
    }


    private function getEmail(): string
    {
        return $this->email;
    }

    private function setEmail($email): void
    {
        $this->email = $email;
    }

    public function getAll(): void
    {
        //  'name' => $this->getName()
        $name = $this->getName();
        $age = $this->getAge();
        $email = $this->getEmail();
    }

    public function __call($name, $arguments)
    {
        echo "Call to undefined method $name";
    }
}

$user = new User;
/*$user->setName('Alex');
$user->setAge(20);
$user->setEmail('example@gmail.com');*/

$user->test1Method('something');
$user->getAll();

dd($user);