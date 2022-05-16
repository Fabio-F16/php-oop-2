<?php
 include_once __DIR__ . '/entities/eCommerce.php';
 include_once __DIR__ . '/entities/food.php';
 include_once __DIR__ . '/entities/game.php';
 include_once __DIR__ . '/entities/user.php';
 include_once __DIR__ . '/entities/creditCard.php';
// include ('eCommerce.php');
// include ('food.php');
// include ('game.php');


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