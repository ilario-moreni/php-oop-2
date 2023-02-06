<?php

class Shelter extends Product{
    public $material;
    public $size;

    public function __construct($name, $animal, $cost, $img_url, $material, $size){
        parent::__construct($name, $animal, $cost, $img_url);
        $this->material = $material;
        $this->size = $size;
        
    }
}



?>