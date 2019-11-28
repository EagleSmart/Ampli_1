<?php 

namespace Amplitudo\Kafe;


//require_once 'Kafe.php';

abstract class DodaciDekorator implements Kafe { // u isto vrijeme 'is a' i 'has a', dekorator jeste kafa ali i sadrzi kafu i na taj nacin vrapuje osnovnu komponentu (espreso ili decaff)

    protected $kafa; 
    public function __construct($kafa){
        $this->kafa=$kafa;
    }

    public abstract function dajOpis();
    public abstract function dajCijenu();
}