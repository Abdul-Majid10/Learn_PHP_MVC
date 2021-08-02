<?php

class AboutController
{
    private $model;

    function __construct($model)
    {
        $this->model = $model;
    }

    public function current()
    {
        return $this->model->nowADay();
    }
}
