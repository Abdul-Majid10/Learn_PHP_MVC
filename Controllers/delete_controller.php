<?php
class DeleteController
{

    private $model;

    function __construct($model)
    {
        $this->model = $model;
    }

    public function delPro()
    {

        if ($_POST['P_ID'] != '') {
            return $this->model->statementExe($_POST['P_ID']);
        } else {
            // echo "Plese write Product Id.";
            return false;
        }
    }
}
