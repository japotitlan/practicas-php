<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo 123;
        echo '<br>';
        echo strval(123);
        echo '<br>';
        echo '<br>';

        $value = 153;
        $arreglo = str_split($value);

        print_r($arreglo);
    ?>
</body>
</html>