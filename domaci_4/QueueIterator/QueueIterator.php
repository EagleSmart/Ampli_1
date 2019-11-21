<?php

namespace Amplitudo;

//require_once "./../Interfejsi/Iterator.php";
//require_once "./../Queue/Queue.php";

class QueueIterator implements Iterator {
    
    private $queue;

    public function __construct($queue){
        
        // parent::__construct($stack->item, $stack->count);
        $this->queue = $queue;
    }

    public function next(){
        return next($this->queue->items);
    }

    public function hasNext(){
        if (next($this->queue->items) != FALSE) {return true;}
        else {return false;}
    }


}