<?php


include_once "autoload.php";

use Amplitudo\Queue;
use Amplitudo\Stack;


$array = [0, 1, 2, 3];
$count = 4;
$stack = new Stack($array, $count);

$stack->pop();