<?php

class Food extends Product{
    public $flavor_type;
    public $isBio;
    
    public function __construct($name, $animal, $cost, $img_url, $flavor_type, $isBio){
        parent::__construct($name, $animal, $cost, $img_url);
        $this->flavor_type = $flavor_type;
        $this->isBio = $isBio;
    }
    
    public function getMessageBio(){
        $message = '';
        if ($this->isBio){
            $message = 'Bio food';
        }
    }



}


?>