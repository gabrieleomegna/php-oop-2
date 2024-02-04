<?php 
require_once __DIR__ . '/Product.php';

class Kennel extends Product {
    public $size;
    public $materials;


    public function __construct(string $_name, string $_imageUrl, string $_description, string $_brand, Category $_category, string $_productType, float $_price, string $hallway, string $shelf, int $shelfNumber, string $_materials, string $_size) {
        parent::__construct($_name, $_imageUrl, $_description, $_brand, $_category, $_productType, $_price, $hallway, $shelf, $shelfNumber,);
        $this->materials = $_materials;
        $this->size = $_size;
    }
}


?>