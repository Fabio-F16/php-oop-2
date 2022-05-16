<?php

class CreditCard extends User {


    protected $type;
    protected $number;
    protected $owner;
    protected $expireDate;
    private $cvc;
    public $checkCard;


    function __construct($_type, $_number, $_owner, $_expireDate){
        $this->type = $_type;
        $this->number = $_number;
        $this->owner = $_owner;
        $this->expireDate = $_expireDate;
    }
    
    public function checkExpired(){
        if($this->expireDate > date('Y-m-d H:i:s')){
            $this->checkCard = false;
        }else{
            $this->checkCard = true;
        }
    }

    public function canBuy(){

        if($this->checkCard){
            return 'Puoi completare il pagamento!';
        }else{
            return 'Carta scaduta!';
        }
    }
}

?>
