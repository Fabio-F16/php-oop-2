<?php
// include 'product.php';
class Game extends Product {

    public $material;
    public $shape;
    // public $animal;
    


    function __construct($_category, $_animal, $_material, $_shape, $_price) {
        $this->category = $_category;
        $this->animal = $_animal;
        $this->material = $_material;
        $this->shape = $_shape;
        $this->price = $_price;
        
    }

   
}
$osso = new Game('Gioco', 'Cane', 'Plastica bio', 'osso', '12,99' );
?>