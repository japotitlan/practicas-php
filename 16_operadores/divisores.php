<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisores</title>
</head>
<body>
    <form action="">
        <h4>Ingrese numero</h4><br>
        <input type="number" name="num">
        <input type="submit" name="boton">
    </form>

    <br>

    <?php
        if(isset($_GET['boton'])){

            $num = $_GET['num'];

            $residuo = $num % 2;

            if($residuo > 0){
    
                echo "$num is prime";
              
            } 
            else{
                
                $array = array();
                
                for($i=2;$i < $num; $i++){
                
                    if($num % $i === 0){
                    
                        $array[] = $i;
                    }
                }
                
                echo '<pre>';
                print_r($array);
                echo '</pre>';
            }

        }
    ?>
</body>
</html>