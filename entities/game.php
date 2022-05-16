<?php
// include 'product.php';
class Game extends Product {

    public $material;
    // public $animal;
    public $shape;
    public $price;


    function __construct($_animal){
        $this->animal = $_animal;
    }


}

?>