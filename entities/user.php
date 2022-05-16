<?php
include __DIR__ . '/creditCard.php';
class User{


    public $name;
    public $surname;
    private $userID;
    private $email;
    private $passwords;
    protected $sconto = 0;
    public $registration = false;
    // protected $creditCard;


    function __construct($_name, $_surname, $_userID){
        $this->name = $_name;
        $this->surname = $_surname;
        $this->userID = rand(1,100);
    }
    
    public function setSconto($registration) {
        if($registration == false) {
            $this->sconto = 0;
        } else {
            $this->sconto = 20;
        }
    }
    
  
}

?>