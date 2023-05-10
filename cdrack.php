<?php
    require_once "product.php";
class CDRack extends Product{
    public $capacity,
           $model;
    function __construct(){}
    
    public function setRackName($rackname){
        $this->rackname = $rackname;
    }
    public function getRackName(){
        return $this->rackname;
    }
    public function setCapacity($capacity){
        $this->capacity = $capacity;
    }
    public function getCapacity(){
        return $this->capacity;
    }
    public function setModel($model){
        $this->model = $model;
    }
    public function getModel(){
        return $this->model;
    }
    public function getPriceWithTaxCDR(){
        return parent::getPrice() + (0.15 * parent::getPrice());
    }
    public function getDiscountTaxCDR(){
        return parent::getDiscount();
    }
}
?>