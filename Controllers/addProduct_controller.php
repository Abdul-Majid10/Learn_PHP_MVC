<?php
class AddProductController
{

    private $model;

    function __construct($model)
    {
        $this->model = $model;
    }

    public function addPro()
    {

        // if (isset($_POST['P_Title']) && $_POST['P_Title'] != '' && isset($_POST['P_Color']) && $_POST['P_Color'] != '' && isset($_POST['P_Price']) && $_POST['P_Price'] != '' && isset($_POST['P_Quantity']) && $_POST['P_Quantity'] != '') {
        if ($_POST['P_Title'] != '' && $_POST['P_Color'] != '' &&  $_POST['P_Price'] != '' && $_POST['P_Quantity'] != '') {
            return $this->model->statementExe($_POST['P_Title'], $_POST['P_Color'], $_POST['P_Price'], $_POST['P_Quantity']);
        } else {
            // echo "Enter data in all feilds";
            // return "Enter data in all feilds";
            return false;
        }
    }
}
