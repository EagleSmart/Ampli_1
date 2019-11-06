<?php 
include 'helpers.php';
require_once './autoload.php';
?>

<html lang="en">
<head>
    <style>
        ul { margin-left: 10px; padding: 0; }
        li { display: inline-block; padding: 10px; background-color: rgba(38, 135, 255, 0.41); }
        a { color: white; text-decoration: none; font-weight: bold; }
        a:hover { text-decoration: underline; color: #045cae; }
        h1 { margin-left: 10px; }
    </style>
    <title>Page 1</title>
</head>


</html>

<?php

formatGetParams();

$test_examples = array("155.164.1.2", "127.0.0.1", "323.32.3.4", "34.325.3.4");

foreach($test_examples as $addres) {
    validateIP($addres);
}

?>