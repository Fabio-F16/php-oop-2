<?php

class Product{
    public $name;
    public $category = 'Generic'; //cibo o gioco o altro 
    public $barreCode;
    public $productName;
    public $animal;
    public $price;

    function __construct($_barreCode){
        $this->barreCode = $barreCode;
    }
} 
?>