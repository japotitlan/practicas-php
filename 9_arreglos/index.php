<?php
    $cheves = array("tecate","indio","modelo","budweiser","ultra");

    $associativeArray = array("2"=>"a","22"=>"b","222"=>"c");

    $x = 0;

    while($x < 5){
        echo $cheves[$x]."<br>";
        $x++;
    }

    foreach($cheves as $cheve){
        echo "<h1>pero saken $cheve</h1>";
    }