<?php
/**
 * classe prodotto
 */
class Product {
    public $name;
    public $cost;


    public function __construct($name, $cost){
        $this->name = $name;
        $this->cost = $cost;
    }

}



?>