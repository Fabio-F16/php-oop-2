<?php
// include 'product.php';


class Food extends Product {
    public $typeOfFood; // secco o umido o altro
    public $ingredient;
    public $age;
    public $expireDate; // data di scadenza
    // public $price;
    // public $animal;


    function __construct($_category, $_typeOfFood, $_animal, $_price){
        $this->category = $_category;
        $this->typeOfFood = $_typeOfFood;
        $this->animal = $_animal;
        $this->price = $_price;
    }

}

$crocchette = new Food('Cibo', 'secco', 'Cani', '29,99');


?>