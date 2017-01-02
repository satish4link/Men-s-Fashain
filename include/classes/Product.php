<?php
class Product{
    private $items_array;
    private $itemCounter;
    
    public function __construct(){
        $this->items_array = array();
        $this->itemCounter = 0;
    }
    public function getItemCount(){
        return $this->itemCounter;
    }
    public function addItem($item){
        $this->itemCounter++;
        $this->items_array[] = $item;
    }
}

?>