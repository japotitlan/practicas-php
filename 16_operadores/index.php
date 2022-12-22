<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Residuo</title>
</head>
<body>
    <form action="">
        <h4>Ingrese 2 numeros para obtener el residuo de division</h4><br>
        <label for=""><input type="number" name="num1"></label>
        <label for=""><input type="number" name="num2"></label>
        <input type="submit" name="boton">
    </form>

    <br>

    <?php
        if(isset($_GET['boton'])){

            $num1 = $_GET['num1'];
            $num2 = $_GET['num2'];


            echo "El residuo es: ".$num1 % $num2;

        }
    ?>
</body>
</html>