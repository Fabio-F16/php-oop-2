<?php

class Product{
    public $name;
    public $category;
    public $barreCode;
    public $productName;

    function __construct($_barreCode){
        $this->barreCode = $barreCode;
    }
} 
?>