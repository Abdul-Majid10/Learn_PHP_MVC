<?php

class AboutModel
{

    private $message;

    function __construct()
    {
        $this->message = "Welcome to my PHP MVC FrameWork";
    }

    public function getMessage(){
        return $this->message;
    }

    public function nowADay()
    {
        return $this->message = "nowadays everybody wants to be a boss.";
    }
}
