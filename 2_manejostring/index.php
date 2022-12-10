<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Algobn funciones</title>
</head>
<body>
    <h1>Texto Normal</h1>
    <?php 
        $msg="dame ratie, pa onde quieres raite?, paya, onde es paya?, paya paya";
        echo $msg;
    ?>

    <h1>Se Voltea Texto</h1>
    <?php 
        $msg="dame ratie, pa onde quieres raite?, paya, onde es paya?, paya paya";
        echo strrev($msg);
    ?>

    <h1>Se Reemplaza Texto (culom)</h1>
    <?php 
        $msg="dame ratie paya, pa onde quieres raite?, paya, onde es paya?, paya paya";
        echo str_replace("paya","culom",$msg);
    ?>

    <h1>Cuantos caracteres</h1>
    <?php 
        $msg="dame ratie paya, pa onde quieres raite?, paya, onde es paya?, paya paya";
        echo strlen($msg);
    ?>
    
</body>
</html>