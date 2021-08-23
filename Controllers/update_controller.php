<?php
class UpdateController
{

    private $model;

    function __construct($model)
    {
        $this->model = $model;
    }

    public function updateProduct()
    {
        if ($_POST['P_ID'] != '' && $_POST['P_Title'] != '' && $_POST['P_Color'] != '' &&  $_POST['P_Price'] != '' && $_POST['P_Quantity'] != '') {
            return $this->model->statementExe($_POST['P_ID'], $_POST['P_Title'], $_POST['P_Color'], $_POST['P_Price'], $_POST['P_Quantity']);
        } else {
            // echo "Enter data in all feilds";
            return false;
        }
    }

    public function checkProductExist()
    {
        if ($_POST['P_ID'] != '') {
            return $this->model->checkProExist($_POST['P_ID']);
        } else {
            // echo "Plese write Product Id.";
            $result = [];
            $result['status'] = false;
            return $result;
        }
    }
}
