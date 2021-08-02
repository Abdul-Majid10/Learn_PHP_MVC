<?php 

class IndexModel{

    private $message = "Welcome to Home Page";

    function __construct()
    {
        
    }

    public function welcomeMessage(){
        return $this->message;
    }
}