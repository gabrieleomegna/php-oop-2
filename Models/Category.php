<?php 
class Category {
    public $name;
    public $iconUrl;
    public $description;

    public function __construct(string $_name,string $_iconUrl,string $_description){
        $this->name = $_name;
        $this->iconUrl = $_iconUrl;
        $this->description = $_description;
    }
}

?>