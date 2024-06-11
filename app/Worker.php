<?php

namespace App;


class Worker implements WorkerInterface
{
    private string $name;
    private int $age;
    private array $hours;

    protected string $position; // свой-во доступно в текущем классе и у наследуемых классав
    private int $experience; // сво-во доступно только в этом классе

    public function __construct($name, $age, $hours)
    {
        $this->name = $name;
        $this->age = $age;
        $this->hours = $hours;
    }

    public function work()
    {
        print_r("I'm working");
    }

    public function setExperience($value): void
    {
        $this->experience = $value;
    }

    public function getExperience(): int
    {
        return $this->experience;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getHours(): array
    {
        return $this->hours;
    }

    public function setHours(array $hours): void
    {
        $this->hours = $hours;
    }


    public function rest()
    {
        // TODO: Implement rest() method.
    }
}