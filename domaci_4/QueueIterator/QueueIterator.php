<?php

namespace Amplitudo;

//require_once "./../Interfejsi/Iterator.php";
//require_once "./../Queue/Queue.php";

class QueueIterator implements Iterator {
    
   

    public function __construct($queue){
        
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