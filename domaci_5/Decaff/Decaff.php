<?php 

namespace Amplitudo\Kafe;

// require_once 'Kafe.php';

class Decaff implements Kafe {

   
    public function __construct() {
        
    }

    public function dajOpis() {
        return 'Decaffeinated ';
    }
    public function dajCijenu() {
        return 1.50;
    }
}