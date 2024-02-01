<?php 
require_once __DIR__ . '/Category.php';
class Product {
    public $name;
    public $imageUrl;
    public $description;
    public $brand;
    public $category;
    public $productType;
    public $price;

    public function __construct(string $_name, string $_imageUrl, string $_description, string $_brand, Category $_category, string $_productType, float $_price,){
       $this->name = $_name; 
       $this->imageUrl = $_imageUrl;
       $this->description = $_description;
       $this->brand = $_brand;
       $this->category = $_category;
       $this->productType = $_productType;
       $this->price = $_price; 
    }
    public function getProductInfo () : string {
        return $this->name . ', ' . $this->productType . ', ' . $this->category->name . ', ' . $this->price;
    }
}

?>