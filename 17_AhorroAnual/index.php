<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ahorro</title>

    <style>

    </style>
</head>
<body>
    <h1>Ahorro Anual</h1>
    <h3>Por cada dia del año habra un sobre correspondiente al dia, el objetivo es llenar el maximo numero de sobres con el dinero correspondiente al dia (no importa el orden), ejemplo: Dia 148 - Sobre #148 = $148 pesos.</h3>
    <h4>Ejemplo de llenar los sobres consecutivamente todos los dias:</h4>

    
    <?php 
        $dinero_total = 0;

        for($i=1;$i <= 365; $i++){
            $dinero_total += $i;
            echo 'Dia: '.$i.' | Dinero: $'.$dinero_total.'<br>';
        }

        echo '<br>'.'<br>'.'Dinero Total: $'.$dinero_total;
    ?>
</body>
</html>