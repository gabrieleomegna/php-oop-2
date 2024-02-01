<?php 
require_once __DIR__ . '/Product.php';

class Food extends Product {
    public $calories;
    public $carbs;
    public $proteins;
    public $fats;

    public function __construct(string $_name, string $_imageUrl, string $_brand, Category $_category, string $_productType, float $_price, float $_carbs, float $_proteins, float $_fats){
        parent ::__construct($_name, $_imageUrl, $_brand, $_category, $_productType, $_price);
        $this->calories = (($_carbs + $_proteins) * 4) + ($_fats * 9);
        $this->carbs = $_carbs;
        $this->proteins = $_proteins;
        $this->fats = $_fats;
    }
    public function getCalories() :int {
        return round($this->calories);
    }
}

?>