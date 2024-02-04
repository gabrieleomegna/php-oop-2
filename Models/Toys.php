<?php 
require_once __DIR__ . '/Product.php';

class Toys extends Product {
    public $materials;
    public $dimensions;


    public function __construct(string $_name, string $_imageUrl, string $_description, string $_brand, Category $_category, string $_productType, float $_price, string $hallway, string $shelf, int $shelfNumber, $_materials, string $_dimensions) {
        parent::__construct($_name, $_imageUrl, $_description, $_brand, $_category, $_productType, $_price, $hallway, $shelf, $shelfNumber);
        $this->materials = $_materials;
        $this->dimensions = $_dimensions;
    }
}



?>