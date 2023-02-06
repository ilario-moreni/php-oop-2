<?php
/**
 * classe prodotto
 */
class Product {
    public $name;
    public $animal;
    public $cost;
    public $img_url;
    public $sale = 0;


    public function __construct($name, $animal, $cost, $img_url){
        $this->name = $name;
        $this->animal = $animal;
        $this->cost = $cost;
        $this->img_url = $img_url;
    }


    public function setSale($sale){
        $this->sale = $sale;
    }

    public function getSale(){
        return $this->sale;
    }

}



?>