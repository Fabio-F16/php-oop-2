<?php
// include 'product.php';


class Food extends Product {
    public $typeOfFood;
    // public $animal;
    public $ingredient;
    public $age;
    public $price;


    function __construct($_typeOfFood, $_animal, $_price){
        $this->typeOfFood = $_typeOfFood;
        $this->animal = $_animal;
        $this->price = $_price;
    }

}

$crocchette = new Food('secco', 'Cani', '29,99');

?>