<?php


class Worker implements WorkerInterface // implements - подключение методов для реализации
{
    // свойства

    use HasRest; // подключение Трейта
    public string $name;
    public int $age;
    public array $hours;
    //protected string $position; // свойство которок будет доступно у наследуемых классах и в самом классе
    private $position;
    private string $positionFuture; // свойство доступное только в классе объявления. Для установки значений применяют set get
    private int $experience;

    public function __construct($name, $age, $hours)
    {
        $this->name = $name;
        $this->age = $age;
        $this->hours = $hours;
    }

    // Методы
    public function work()
    {
        print_r("working");
    }

    // для установки значений private
    public function setPosition($value)
    {
        $this->position = $value;
    }

    public function getPosition(): string
    {
        return $this->positionFuture;
    }

}

$worker = new Worker("Boris", 20, [5, 6, 10]);

// работа с private
$worker->setPosition('developer');
var_dump($worker->getPosition());
