<?php

class User{


    public $name;
    public $surname;
    private $CF;
    private $email;
    private $passwords;
    public $registration;


    function __construct($_name, $_surname, $_CF){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->CF = $_CF;
    }


}

?>