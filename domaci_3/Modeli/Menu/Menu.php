<?php

require_once 'autoload.php';
require_once 'Modeli/MenuItem/MenuItem.php';




class Menu implements Renderable{

    private $items; 
    private $page_1;
    private $page_2;
    private $links;

    public function fillLinks() { $links = [ 
           ['label' => 'page_one', 
            'page_name' => 'page_1.php',
            'params' => ['id' => 23,
                        'sortBy' => 'date',
                        'brand' => 10,
                        'name' => 'M&M\'S' ]],
            ['label' => 'page_two',
             'page_name' => 'page_2.php',
             'params' => ['id' => 24,
                         'sortBy' => 'date',
                         'brand' => 11,
                         'name' => 'B&M\'B' ]],
            ['label' => 'homepage',
             'page_name' => 'homepage.php',
             'params' => ['id' => 1,
                         'sortBy' => 'size',
                         'brand' => 13,
                         'name' => 'Y&M\'B' ]] 
       ];
       return $links;
    }

    public function __construct(){

        $this->links = $this->fillLinks();
        $this->page_1 = new MenuItem($this->links[0]['label'], $this->links[0]['page_name'], $this->links[0]['params']);
        $this->page_2 = new MenuItem($this->links[1]['label'], $this->links[1]['page_name'], $this->links[1]['params']);
        $this->homepage = new MenuItem($this->links[2]['label'], $this->links[2]['page_name'], $this->links[2]['params']);

        $this->items = [$this->page_1, $this->page_2, $this->homepage];
    }

    public function render(){
        echo " <ul> ";
            foreach($this->items as $item){
               echo "<li>" . $item->render() . "</li>";
            }
        echo " </ul>";
        


    }
}