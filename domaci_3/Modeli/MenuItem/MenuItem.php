<?php

require_once 'autoload.php';

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
    
    public function generateHref($page_name, $params){
        return 'href ="'. $page_name . '/?' . $this->generateUrlQuery($params) . '"';
    }

    public function render(){
        return "<a " . $this->generateHref($this->pageName, $this->params) . " \> " . $this->label . " </a>";
    }
    

}