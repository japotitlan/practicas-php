<?php
    $cheves = array("tecate","indio","modelo","budweiser","ultra");

    $x = 0;

    while($x < 5){
        echo $cheves[$x]."<br>";
        $x++;
    }

    foreach($cheves as $cheve){
        echo "<h1>pero saken $cheve</h1>";
    }