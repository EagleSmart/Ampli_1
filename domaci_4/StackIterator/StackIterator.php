<?php

namespace Amplitudo;

//require_once "./../Interfejsi/Iterator.php";
//require_once "./../Stack/Stack.php";

class StackIterator implements Iterator {
    
    private $stack;

    public function __construct($stack){
        
        // parent::__construct($stack->item, $stack->count);
        $this->stack = $stack;
    }

    public function next(){
        return next($this->stack->items);
    }

    public function hasNext(){
        if (next($this->stack->items) != FALSE) {return true;}
        else {return false;}
    }


}