<?php

class CreditCard extends user {


    protected $type;
    protected $number;
    protected $owner;
    protected $expireDate;
    private $cvc;


    function __construct($_type, $_number, $_owner, $_expireDate){
        $this->type = $_type;
        $this->number = $_number;
        $this->owner = $_owner;
        $this->expireDate = $_expireDate;
    }
}

?>