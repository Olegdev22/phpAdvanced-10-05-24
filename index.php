<?php

/*class Mysql
{
    public function getData()
    {
        return 'some data from database';
    }
}

class Controller
{
    private $adapter;

    public function __construct(Mysql $mysql)
    {
        $this->adapter = $mysql;
    }

    function getData()
    {
        $this->adapter->getData();
    }
}*/

// Dependency inversion principle
interface DatabaseAdapterInterface
{
    public function getData(): string;
}

class Mysql implements DatabaseAdapterInterface
{
    public function getData(): string
    {
        return 'some data from database';
    }
}

class Postgresql implements DatabaseAdapterInterface
{
    public function getData(): string
    {
        return 'some data from PostgreSQL database';
    }
}

class Controller
{
    // Зависимость инвертирована: завязались на интерфейс, а не на класс Mysql
    private DatabaseAdapterInterface $adapter;

    public function __construct(DatabaseAdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    function getData(): string
    {
        return $this->adapter->getData();
    }
}

$mysqlAdapter = new Mysql();
$controller = new Controller($mysqlAdapter);
echo $controller->getData();

$postgresqlAdapter = new Postgresql();
$controller2 = new Controller($postgresqlAdapter);
echo $controller2->getData();