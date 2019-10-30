<?php
include_once 'helpers.php';

$links = [ ['label' => 'page_one', 
            'page_name' => 'page_1.php',
            'param' => ['id' => 23,
                        'sortBy' => 'date',
                        'brand' => 10,
                        'name' => 'M&M\'S' ]],

            ['label' => 'page_two',
             'page_name' => 'page_2.php',
             'param' => ['id' => 24,
                         'sortBy' => 'date',
                         'brand' => 11,
                         'name' => 'B&M\'B' ]] 
];
 


?>

<html>
    <body>
         <ul>
            <li><a <?php echo generateHref($links[0]['page_name'], $links[0]['param']) ?> > Page One </a></li>
            <li><a <?php echo generateHref($links[1]['page_name'], $links[1]['param']) ?> > Page Two </a></li>
         </ul>
    </body>

</html>