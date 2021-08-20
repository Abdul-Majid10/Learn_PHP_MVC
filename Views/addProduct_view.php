<?php
class AddProductView
{
    private $model;
    private $controller;

    function __construct($controller, $model)
    {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function index()
    {
        require 'php_files/header.php';
        require 'php_files/addProductForm.php';
    }

    public function runAddPro()
    {
        return $this->controller->addPro();
    }
}
