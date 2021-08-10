<?php

class AboutView
{
    private $model;
    private $controller;

    function __construct($controller, $model)
    {
        $this->controller = $controller;
        $this->model = $model;

        print "About - ";
    }

    public function aboutMessage()
    {
        return $this->model->getMessage();
    }

    public function now()
    {
        return $this->model->nowADay();
    }

    public function today()
    {
        return $this->controller->current();
    }
}
