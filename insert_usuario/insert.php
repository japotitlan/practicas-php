<?php
    $con=mysqli_connect("localhost","root","","bd_playsoccer");

    $usuario = $_GET["usuario"];
    $contra = password_hash($_GET["contra"],PASSWORD_DEFAULT);
    $nombre = $_GET["nombre"];
    $puesto = $_GET["puesto"];
    
    $sql = "INSERT INTO usuarios (username,password,nombre,puesto) VALUES ('$usuario','$contra','$nombre','$puesto')";
    $query = mysqli_query($con,$sql);

    if($query){
        echo "simon si jalo";
    }
    else{
        echo "nambre patucasa";
    }
