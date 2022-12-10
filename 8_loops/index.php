<?php
    $x=0;

    while($x <= 10){
        echo "<h4>$x</h4>";
        $x++;
    }

    do{
        echo "<h2>$x</h2>";
        $x++;
    }
    while($x <= 20);

    for($i=0;$i < 10; $i++){
        echo "<h1>algo bien eh</h1>";
    }

    $cheves = array("tecate","indio","modelo");
    foreach ($cheves as $cheve){
        echo "<h1>amimegustan mucho las caguamas $cheve</h1>";
    }
    
?>