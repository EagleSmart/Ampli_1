<?php

namespace Amplitudo\Kafe;
 
require_once 'autoload.php';


// Primjer implementira decorator pattern u najjednostavnijem obliku


$prva = new CokoladaDekorator(new MlijekoDekorator(new KaramelDekorator(new Espresso())));
echo 'Cijena kafe je ' . $prva->dajCijenu(); 
echo '</br>';
echo 'Opis kafe je ' . $prva->dajOpis(); 

echo '</br>';

$druga = new MlijekoDekorator(new KaramelDekorator(new Decaff()));
echo 'Cijena kafe je ' . $druga->dajCijenu(); 
echo '</br>';
echo 'Opis kafe je ' . $druga->dajOpis(); 