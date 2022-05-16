<?php
// include 'product.php';


class Food extends Product {
    public $typeOfFood;
    // public $animal;
    public $ingredient;
    public $age;
    public $price;


    function __construct($_typeOfFood, $_animal){
        $this->typeOfFood = $_typeOfFood;
        $this->animal = $_animal;
    }


}

?>