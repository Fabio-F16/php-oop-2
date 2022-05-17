<?php
// include __DIR__ . '/creditCard.php';

class User{

    public $name;
    public $surname;
    public $address;
    private $userID;
    private $registration = false;
    private $email;
    public $phoneNumber;
    private $passwords;
    protected $sconto = 0;
    
    // protected $creditCard;


    function __construct($_name, $_surname, $_userID, $_registration){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->userID = rand(1,100);
        $this->registration = $_registration;
    }
    
    public function setSconto($registration) {
        if($registration == false) {
            $this->sconto = 0;
            echo('utente non registrato');
        } else {
            $this->sconto = 20;
            echo('utente registrato');
        }
    }
}



?>