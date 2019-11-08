<?php

Namespace Domaci3;

use Domaci3\Renderable;

 require_once 'Interfejsi/Renderable.php';

class MenuItem implements Renderable{
    private $label;
    private $pageName; 
    private $params;

    public function __construct($label, $pageName, $params) {
        $this->label = $label;
        $this->pageName = $pageName;
        $this->params = $params;
    }

    public function generateUrlQuery($params){
        return http_build_query($params);
    }

    /*
    public function generateUrlQuery2($params){
        return rawurlencode($params);
    }
    */
    
    public function generateHref(){
        return 'href ="'. $this->pageName . '/?' . $this->generateUrlQuery($this->params) . '"';
    }

    public function render(){
        return "<a " . $this->generateHref() . " \> " . $this->label . " </a>";
    }
    

}