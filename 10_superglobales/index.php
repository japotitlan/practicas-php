<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="font-size: 80px; margin-top:30vh;">
    
    <?php
        /*
            VARIABLES SUPERGLOBALES

            $GLOBALS[''];
            $_GET[''];
            $_POST[''];
            $_COOKIE[''];
            $_SESSION[''];        
        */

        $bits = 256;
        
        function abr(){
            $y = 19;
            $global = $GLOBALS['bits'];
            echo "Variable Local: $y<br>Variable Global: $global";
        }

        //abr();


        function si(){
            //setcookie("name","miguel");
            $_SESSION['usuario']= "4";
            echo $_COOKIE['name'];
            echo $_SESSION['usuario'];
        }
        

        si();
    
    ?>

</body>
</html>