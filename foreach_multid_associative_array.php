<?php
    $fees["tausif"]["php"] = 10;
    $fees["tausif"]["html"] = 30;
    $fees["tausif"]["css"] = 40;

    $fees["dip"]["c++"] = 10;
    $fees["dip"]["java"] = 30;
    $fees["dip"]["c"] = 40;

    $fees["moon"]["javascript"] = 10;
    $fees["moon"]["c#"] = 30;
    $fees["moon"][".net"] = 40;

    foreach($fees as $values){
        foreach($values as $data){
            echo $data. " ";
        }
        echo "<br>";
    }

    foreach($fees as $keys=> $values){
        foreach($values as $key=>$data){
            echo $data. " " . $key . " " . $data. " ";
        }
        echo "<br>";
    }

?>