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

        // if (isset($_POST['P_Title']) && $_POST['P_Title'] != '' && isset($_POST['P_Color']) && $_POST['P_Color'] != '' && isset($_POST['P_Price']) && $_POST['P_Price'] != '' && isset($_POST['P_Quantity']) && $_POST['P_Quantity'] != '') {
        if ($_POST['P_ID'] != '' && $_POST['P_Title'] != '' && $_POST['P_Color'] != '' &&  $_POST['P_Price'] != '' && $_POST['P_Quantity'] != '') {

            $this->model->statementExe($_POST['P_ID'], $_POST['P_Title'], $_POST['P_Color'], $_POST['P_Price'], $_POST['P_Quantity']);
        } else {
            echo "Enter data in all feilds";
        }
    }

    public function checkProductExist()
    {
        if ($_GET['P_ID'] != '') {
            return $this->model->checkProExist($_GET['P_ID']);
        } else {
            echo "Plese write Product Id.";
            return false;
        }
    }
}
