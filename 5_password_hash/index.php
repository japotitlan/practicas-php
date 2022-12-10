<?php
$msg = "root";
$msg_encriptado = password_hash($msg,PASSWORD_DEFAULT);

echo "<h1>$msg</h1>";
echo "<h1>$msg_encriptado</h1>";

if(password_verify($msg,$msg_encriptado)){
    echo "<br><h1>SI COINCIDE</h1>";
}
else{
    echo "<br><h1>valio v</h1>";
}



?>