<?php 
require_once __DIR__ . '/Product.php';

class Kennel extends Product {
    public $size;
    public $materials;


    public function __construct(string $_name, string $_imageUrl, string $_brand, Category $_category, string $_productType, float $_price, string $_materials, string $_size) {
        parent::__construct($_name, $_imageUrl, $_brand, $_category, $_productType, $_price);
        $this->materials = $_materials;
        $this->size = $_size;
    }
}


?>