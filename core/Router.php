<?php

namespace Core;

use App\Enums\Http\Method;


class Router
{
// pattern Singleton
    protected static Router|null $instance = null;
    protected array $routes = [], $params = [];
    protected string $currentRout;

    static function getInstance(): static
    {
        if (is_null(static::$instance)) {
            static::$instance = new static();
        }
        return static::$instance;
    }

    public function __call(string $name, array $arguments)
    {
        $methodName = 'set' . ucfirst($name);

        if (method_exists($this, $methodName)) {
            throw new \Exception(__CLASS__ . ": Method [$methodName] does not exists");
        }

        $refMethod = new \ReflectionMethod($this::class, $methodName);
        dd($refMethod);
    }

    static protected function setUri(string $uri): static
    {
        $uri = preg_replace('/\//', '\\/', $uri);
        // api/resource/{id:\d}/update
        $uri = preg_replace('/\{([a-z_-]+):([^}]+)}/', '(?P<$1>$2)', $uri);
        $uri = "/^$uri$/i";

        $router = static::getInstance();
        $router->routes[$uri] = [];
        $router->currentRout = $uri;
        return $router;

    }

    protected function setController(string $controller): static
    {
        $this->routes[$this->currentRout]['controller'] = $controller;
        return $this;
    }

    protected function setAction(string $action)
    {
        $this->routes[$this->currentRout]['action'] = $action;
    }

    protected function setMethod(Method $method): static
    {
        $this->routes[$this->currentRout]['method'] = $method->value;
        return $this;
    }
}