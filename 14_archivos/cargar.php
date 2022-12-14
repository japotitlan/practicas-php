<?php 
    $archivo = $_FILES['archivo'];
    echo '<pre>';
    print_r($archivo);
    echo '</pre>';

    $archivo_ext = PATHINFO($archivo['name'], PATHINFO_EXTENSION);

    echo '<br>';
    echo 'Nombre del archivo   : '.$archivo['name'].'<br>';
    echo 'Tamaño del archivo   : '.$archivo['size'].'KBs'.' | '.($archivo['size']/1024).'MBs'.'<br>';
    echo 'Extension del archivo: '.$archivo_ext.'<br>';
?>