<?php


namespace App\src\Rule;


class Application
{
    public $router;

    public function __construct()
    {
        $this->router = new Router();
    }

    public function run()
    {
        echo $this->router->resolve();
    }
}