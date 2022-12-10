<?php 
    $cheve = array("Tecate"); // se puede declarar vacio "array();"

    $cheve[] = "Modelo"; // ingresar valores individuales
    $cheve[] = "Corona";

    array_push($cheve, "Budweiser", "Indio", "Carta Blanca"); // ingresar varios valores a la vez

    print_r($cheve);
?>