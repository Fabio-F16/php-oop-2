<?php

class CreditCard extends User {


    protected $typeOfCard;
    protected $number;
    protected $owner;
    protected $expireDate;
    private $cvc;
    public $checkCard;


    function __construct($_name, $_surname,  $_registration, $_typeOfCard, $_number, $_owner, $_expireDate){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->registration = $_registration;
        $this->typeOfCard = $_typeOfCard;
        $this->number = $_number;
        $this->owner = $_owner;
        $this->expireDate = $_expireDate;
    }
    
    public function checkExpired(){
        if($this->expireDate < date('Y-m-d')){
            $this->checkCard = true;
            echo 'Carta scaduta!';
        }else{
            $this->checkCard = false;
            echo 'Puoi effettuare il pagamento';
        }
    }

    // public function canBuy(){

    //     if(!$this->checkCard){
    //         return 'Carta scaduta!';
    //     }else{
    //         return 'Puoi effettuare il pagamento';
    //     }
    // }
}

$user1 = new CreditCard('Antonio', 'Falcone', true, 'Mastercard', '0000 0000 0000 0000', 'AntonioFalcone', date('2022/05/15'));
$user2 = new CreditCard('Paola', 'Perego', false, 'Mastercard', '0000 0000 0000 0000', 'PaolaPerego', date('1990/05/15'));


?>
