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

        if ($_GET['P_ID'] != '') {
            $this->model->statementExe($_GET['P_ID']);
        } else {
            echo "Plese write Product Id.";
        }
    }
}
