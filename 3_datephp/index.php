<?php

$zona_horaria = date_default_timezone_get();

echo $zona_horaria.'<br/>';
echo date("Y-m-d").'<br/>';
echo date("H:i:s").'<br/>'.'<br/>';

date_default_timezone_set('America/Phoenix');
$zona_horaria = date_default_timezone_get();

echo $zona_horaria.'<br/>';
echo date("Y-m-d").'<br/>'; //fecha
echo date("H:i:s").'<br/>'.'<br/>'; //hora

echo "Fecha en dos semanas".'<br/>';
$fecha_caducidad = time();
$fecha_caducidad += 14 * 24 * 60 * 60;
echo date("Y-m-d",$fecha_caducidad);














$dia_actual = date("w");
switch($dia_actual){
    case 0:
        echo "<h3>Hoy es Domingo!</h3>";
        break;
    case 1:
        echo "<h3>Hoy es Lunes!</h3>";
        break;
    case 2:
        echo "<h3>Hoy es Martes!</h3>";
        break;
    case 3:
        echo "<h3>Hoy es Miercoles!</h3>";
        break;
    case 4:
        echo "<h3>Hoy es Jueves!</h3>";
        break;
    case 5:
        echo "<h3>Hoy es Viernes!</h3>";
        break;
    case 6:
        echo "<h3>Hoy es Sabado!</h3>";
        break;
}