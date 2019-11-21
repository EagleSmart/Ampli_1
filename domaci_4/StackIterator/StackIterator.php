<?php

namespace Amplitudo;

//require_once "./../Interfejsi/Iterator.php";
//require_once "./../Stack/Stack.php";

class StackIterator extends Stack implements Iterator {
    
   

    public function __construct($stack){
        
         parent::__construct($stack->items, $stack->count);
        
    }

    public function next(){
        return next($this->items);
    }

    public function hasNext(){
        if (next($this->items) != FALSE) {return true;}
        else {return false;}
    }


}