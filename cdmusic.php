<?php
    require_once "product.php";
    class CDMusic extends Product{
    public $artist;
    public $genre;

    function __construct(){}
    
    public function setArtist($artist){
        $this->artist = $artist;
    }
    public function getArtist(){
        return $this->artist;
    }
    public function setGenre($genre){
        $this->genre = $genre;
    }
    public function getGenre(){
        return $this->genre;
    }
    public function getPriceWithTaxCDM(){
        return parent::getPrice() + (0.1 * parent::getPrice());
    }
    public function getDiscountTaxCDM(){
        return parent::getDiscount() + (0.05 * parent::getDiscount());
    }
    }
?>