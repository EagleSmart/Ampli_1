<?php

namespace Amplitudo;

//require_once "./../Collection/Collection.php";

class Queue extends Collection {
    private $front;
    private $rear;
    public function __construct($items, $count){
        parent::__construct($items, $count);
        $this->front = 0;
        $this->rear = $count;
    }

    public function enqueue($item){
        try{
          //$this->add($item, $this->count);
          $this->items[$this->rear] = $item;
          $this->count++;
          $this->rear++;
        } catch(CollectionOverFlowException $e){
          echo '<h1>' . $e->getMessage() . '</h1>';
        }
    }

    public function dequeue(){
        if(!$this->isEmpty()) {
           $item = $this->items[$this->front];
           $this->front++;
           $this->count--;
           return $item;
        }
        else {return null;}
    }

    public function getIterator(){ // nema klase iterator (kao u zadatku) a queueiterator nasljedjuje od queue ?
     //   $queueIterator = new queueIterator($this);
     //   return $queueIterator;
    }

}