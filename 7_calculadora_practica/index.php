<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="">
        <input type="number" name="num1" placeholder="Numero 1">
        <input type="number" name="num2" placeholder="Numero 2">
        <select name="op">
            <option>N/A</option>
            <option>Sumar</option>
            <option>Restar</option>
            <option>Multiplicar</option>
            <option>Dividir</option>
        </select>
        <button type="submit" name="submit" value="true">Calcular</button>
        <br>
        <br>
    </form>

    <?php 
        if(isset($_GET['true'])){

            $num1 = intval($_GET['num1']);
            $num2 = intval($_GET['num2']);
            $op = $_GET['op'];
            
            switch($op){
                case "Sumar":
                    $suma = $num1+$num2;
                    echo "<h1>El Resultado Es: $suma</h1>";
                    break;
                case "Restar":
                    $resta = $num1-$num2;
                    echo "<h1>El Resultado Es: $resta</h1>";
                    break;
                case "Multiplicar":
                    $multi = $num1*$num2;
                    echo "<h1>El Resultado Es: $multi</h1>";
                    break;
                case "Dividir":
                    $div = $num1/$num2;
                    echo "<h1>El Resultado Es: $div</h1>";
                    break;
                default:
                    echo "<h3>Selecione un operador valido...</h3>";
            }
        }
    ?>

</body>
</html>