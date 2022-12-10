<?php
    $user="jxa7x80cy9s6fdlvpap8";
    $pass="pscale_pw_21grahLw8Y8dyr11cJzGU0xrv8Of9lsTtU34p43F4Vt";
    $host="us-west.connect.psdb.cloud";
    $db="bd_playsoccer";

    $mysqli = mysqli_init();
    $mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
    $mysqli->real_connect($host, $user, $pass, $db);
    

    $query = mysqli_query($mysqli,"SELECT * FROM cheves");
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PlanetScale</title>
</head>
<body>
    <?php
        while($filas=mysqli_fetch_array($query)){

    ?>
        <h1 style="text-align: center;"><?php echo "id: ".$filas['id']." nombre: ".$filas['nombre']." lema: ".$filas['lema']?></h1>
    <?php
        }
        $mysqli->close();
    ?>
</body>
</html>