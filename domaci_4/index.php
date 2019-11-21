<?php


include_once "autoload.php";

use Amplitudo\Queue;
use Amplitudo\Stack;
use Amplitudo\StackIterator;
use Amplitudo\QueueIterator;


$array = [0, 1, 2, 3];
$count = 4;
$stack = new Stack($array, $count);


$array = [0, 1, 2, 3];
$count = 4;
$queue = new Queue($array, $count);

print_r($stack);
echo "</br>";
$stack->pop(); // decreasing count from 4 to 3
print_r($stack);
$stack->push(10); // pushes value 10 on the index 3 (count has increased and is now 4)
echo "</br>";
print_r($stack);
echo "</br>";
$stack->push(11);
print_r($stack);
echo "</br>";




print_r($queue);
echo "</br>";
$queue->enqueue(30);
print_r($queue);
echo "</br>";
$queue->dequeue(); // front pointer increases to 1 from 0, count from 5 to 4
print_r($queue);

echo "</br>";
$stackIter = new StackIterator($stack);
$stackIter->next();