<?php
    // multidimensional array is arrays of arrays
    $laptop[0][0] = "moon";
    $laptop[0][1] = "dell";
    $laptop[0][2] = "10";

    $laptop[1][0] = "tausif";
    $laptop[1][1] = "hp";
    $laptop[1][2] = "30";

    $laptop[2][0] = "dip";
    $laptop[2][1] = "fujitsu";
    $laptop[2][2] = "40";

    foreach($laptop as $values){
        foreach($values as $details){
            echo $details. " ";
        }
        echo "<br>";
    }

    foreach($laptop as $keys=> $values){
        foreach($values as $key=>$value){
            echo $keys. " ". $key . "" . $value. "";
        }
        echo "<br>";
    }
?>