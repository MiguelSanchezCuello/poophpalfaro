<?php
    require_once "saiyajin.php";

    $goku = new saiyajin("Goku", 1000);
    $vegeta = new saiyajin("Vegeta",  nivel_pelea: 950);
    # Podemos usar el nombre del arguemento seguido de dos puntos para indicar el valor del argumento en el constructor
    # si queres combinar que un parametro tenga el nombre y otro no, los parametros sin nombre deben ir primero.
    # Usar nombres para referirse al valor del argumento es util si los prametros se envian en orden distinto.
    # No es una practica comun.

    echo $goku->Saludar().'<br />';
    echo $vegeta->Saludar("El principe de los saiyayins, yo soy ").'<br /><br />';

    $gohan = new SuperSaiyajin("Gohan", 2000);

    echo $gohan->Saludar().'<br />';
    echo $gohan->NivelDePelea().'<br />';
    echo $gohan->Transformacion().'<br />';