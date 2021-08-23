<?php
class UpdateView
{
    private $model;
    private $controller;
    private $res;

    function __construct($controller, $model)
    {
        $this->controller = $controller;
        $this->model = $model;
    }

    public function index()
    {
        require 'php_files/header.php';
        require 'php_files/updateProductForm1.php';
    }

    public function updatePro()
    {
        return $this->controller->updateProduct();
    }

    public function showProData()
    {
        $result = $this->controller->checkProductExist();
        return json_encode($result);
    }
}
