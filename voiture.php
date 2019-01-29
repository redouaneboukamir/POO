<?php

class Voiture {
    // private $datetime1 = new DateTime();
    public function __construct($data = array()){

        $this->data = $data;

    }
    public function getValue($index){
        return $this->data[$index];
    }
    public function immatriculation($immat){
        
        switch($this->getValue($immat)[0].$this->getValue($immat)[1]){
            case 'BE': return 'Belgique';break;
            case 'FR': return 'France';break;
            case 'DE': return 'Allemagne';break;
        };
    }
    public function miseEnCircu($date){
        
        return $this->getValue($date);
    }
    public function km($km){
        if($this->getValue($km) <100000){
            return 'Low';
        }else if($this->getValue($km) > 100000 && $this->getValue($km) <  200000){
            return 'middle';
        }else{
            return 'high';
        }
        
    }
    public function modele($modele){

        return $this->getValue($modele);
    }
    public function marque($marque){
        if(strtoupper($this->getValue($marque)) == 'AUDI'){
            return 'Reserved';
        }else{
            return 'free';

        }
    }
    public function couleur($color){
        return $this->getValue($color);
    }
    public function poids($poids){
        if($this->getValue($poids) > 3500){
            return 'Utilitaire';
        }else{

            return 'commerciale';
        }
    }

}

?>