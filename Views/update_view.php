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
        $this->controller->updateProduct();
    }

    public function showProData()
    {
        $this->res = $this->controller->checkProductExist();
        if ($this->res != false) {
            // require 'php_files/header.php';
            // require 'php_files/updateProductForm2.php';
            // $arr = array("status" => "true", "form-2-data" => require 'php_files/updateProductForm2.php');
            // return $arr;
            // return ["form_data" => require 'php_files/updateProductForm2.php', "status" => 1];
            return ["form_data" => "Majid", "status" => 1];
        }
        return $this->res;
    }
}
