<?php

class IndexController
{
    private $model;

    function __construct($model)
    {
        $this->model = $model;
    }

    public function sayWelcome()
    {
        return $this->model->welcomeMessage();
    }

    public function get_all_products_stmt()
    {
        return $this->model->get_all_products_stmt();
    }
}
