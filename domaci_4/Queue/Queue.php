<?php

namespace Amplitudo;

//require_once "./../Collection/Collection.php";

class Queue extends Collection {
    private $front;
    public function __construct($items, $count){
        parent::__construct($items, $count);
        $this->front = 0;
    }

    public function enqueue($item){
        try{
          add($item, $this->count);
        } catch(CollectionOverFlowException $e){
          echo '<h1>' . $e->getMessage() . '</h1>';
        }
    }

    public function dequeue(){
        if(!$this->isEmpty) {
           $item = $this->items[$this->front];
           $this->front++;
           return $item;
        }
        else {return null;}
    }

    public function getIterator(){
        $queueIterator = new queueIterator($this);
        return $queueIterator;
    }

}