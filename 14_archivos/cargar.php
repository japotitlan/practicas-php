<?php 
    // Verificar si se envio archivo
    // error 4 significa que no se envio ningun archivo
    if($_FILES['archivo']['error'] != 4){

        $archivo = $_FILES['archivo'];

        echo '<pre>';
        print_r($archivo);
        echo '</pre>';

        $archivo_ext = PATHINFO($archivo['name'], PATHINFO_EXTENSION);
        $nuevo_nombre = uniqid("kakino-").'.'.$archivo_ext;

        echo '<br>';
        echo 'Nombre del archivo   : '.$archivo['name'].'<br>';
        echo 'Ubicacion temporal   : '.$archivo['tmp_name'].'<br>';
        echo 'Tamaño del archivo   : '.$archivo['size'].' Bytes'.' | '.($archivo['size']/1024).' KiloBytes'.'<br>';
        echo 'Extension del archivo: '.$archivo_ext.'<br>';
        echo 'Nombre custom: '.$nuevo_nombre;

        echo '<br>'.'<br>'.'Tamaño del archivo   : '.$archivo['size'];

    } else{

        echo 'No se seleccionó ningun archivo.';

    }
    
?>