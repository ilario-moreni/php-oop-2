<?php

class Shelter extends Product{
    public $material;
    public $size;
    public $assurance;

    public function __construct($name, Category $category, $cost, $img_url, $material, $size){
        parent::__construct($name, $category, $cost, $img_url);
        $this->material = $material;
        $this->size = $size;
        
    }

    public function setAssurance($boolean){
        $this->assurance = $boolean;
    }
    public function getAssurance(){
            $message = '';
            if ($this->assurance){
                $message = 'Assicurazione standard 12mesi';
            } else{
                $message = 'Non coperta da assicurazione';
            }
            return $message;
        }
    
}



?>