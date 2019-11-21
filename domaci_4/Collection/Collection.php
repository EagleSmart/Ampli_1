<?php

namespace Amplitudo;

//require_once "./../Interfejsi/HTMLRenderable.php";



abstract class Collection implements HTMLRenderable { 

    private $items; 
    private $count;


    public function __construct($items, $count)
    {
        $this->items = $items;
        $this->count = $count;
    }


    protected function add($element, $postion){

        if(($position > $this->count) || ($position < 0)) throw new CollectionOverflowException();

        $this->items[$position] = $element;
        $this->count++;

    }

    public abstract function getIterator();

    public function isEmpty() {

        if($this->count == 0) {
            return true;
        } else {
            return false;
        }
        
    }

    public function toHTML() {

        echo '<ol>'; 
            for($i = 0; $i<$this->count; $i++){
            echo '<li>' . $this->items[$i] . '</li>';
            }
        echo '</ol>';
    }
    
}
