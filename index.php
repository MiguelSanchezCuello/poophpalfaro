<?php
    require_once "saiyajin.php";

    $goku = new saiyajin("Goku", 1000);
    $vegeta = new saiyajin("Vegeta", 1500);

    echo $goku->Saludar().'<br />';
    echo $vegeta->Saludar("El principe de los saiyayins, yo soy ");