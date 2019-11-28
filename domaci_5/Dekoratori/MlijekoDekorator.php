<?php 

namespace Amplitudo\Kafe;

//require_once 'DodaciDekorator.php';

class MlijekoDekorator extends DodaciDekorator {

    //protected $kafa;

    public function __construct($kafa) {
        parent::__construct($kafa);
        //$this->kafa = $kafa;
    }
     
    public function dajOpis(){
        return $this->kafa->dajOpis() . 'sa mlijekom ';
    }
    public function dajCijenu(){
        return $this->kafa->dajCijenu() + 0.40;
    }
}