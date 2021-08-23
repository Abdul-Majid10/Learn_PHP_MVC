<?php
class DeleteView
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
        require 'php_files/deleteProductForm.php';
    }

    public function runDelPro()
    {
        return $this->controller->delPro();
    }
}
