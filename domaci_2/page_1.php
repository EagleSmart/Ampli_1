<?php 
include 'helpers.php';


formatGetParams();

$test_examples = array("155.164.1.2", "127.0.0.1", "323.32.3.4", "34.325.3.4");

foreach($test_examples as $addres) {
    validateIP($addres);
}