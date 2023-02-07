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


    public function __construct($name, Category $category, $cost, $img_url){
        $this->name = $name;
        $this->category = $category;
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