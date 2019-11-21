<?php

namespace Amplitudo;

//require_once "./../Collection/Collection.php";

class Stack extends Collection {

    public function __construct($items, $count){
        parent::__construct($items, $count);

    }

    public function push($item){
        try{
         // $this->add($item, $this->count);
          $this->items[$this->count] = $item;
          $this->count++;
        } catch(CollectionOverFlowException $e){
          echo '<h1>' . $e->getMessage() . '</h1>';
        }
        
        
    }

    public function pop(){
        if(!$this->isEmpty()){

          $item = $this->items[$this->count-1];
          $this->count--;
          return $item; 

        }else{
          return null;
        }
    }

    public function getIterator(){  // nema klase iterator (kao u zadatku) a stackiterator nasljedjuje od stacka ?
     // $stackIterator = new StackIterator($this);
     // return $stackIterator;
    }

}