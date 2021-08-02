<?php
// $productFormModel = new AddProductModel();
// $productFormController = new AddProductController($productFormModel);
// $productFormView = new AddProductView($productFormController, $productFormModel);
class AddProductController
{

    private $model;

    function __construct($model)
    {
        $this->model = $model;
    }
}
