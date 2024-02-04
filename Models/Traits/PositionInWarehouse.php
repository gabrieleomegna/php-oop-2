<?php 

trait PositionInWarehouse {
    public $hallway;
    public $shelf;
    public $shelfNumber;

    public function getPosition() {
        return $this->hallway . ' ' . $this->shelf . ' ' . $this->shelfNumber;
    }
}


?>