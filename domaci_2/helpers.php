<?php

function generateUrlQuery($params){
    return http_build_query($params);
}


function generateHref($page_name, $params){
    return 'href ="'. $page_name . '/?' . generateUrlQuery($params) . '"';
}

function formatGetParams(){
    echo "  <ul>  ";
            // echo count($_GET);
            foreach ($_GET as $element) {
                echo "  <li> $element </li> ";
            }
    
           echo " </ul> ";
}

function validateIP($addres){          
    if(filter_var($addres, FILTER_VALIDATE_IP)){
        echo "Addres " . $addres ." is a valid IP addres <br>";
        return true;
    }
    else {
        echo "Addres " . $addres ." is a false IP addres <br>";
        return false;
    }
}