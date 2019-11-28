<?php 

namespace Amplitudo\Kafe;

// require_once 'Kafe.php';

class Espresso implements Kafe {

   
    public function __construct() {
        
    }

    public function dajOpis() {
        return 'Espresso ';
    }
    public function dajCijenu() {
        return 1.20;
    }
}