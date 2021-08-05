<?php
    $laptop[0][0] = "tausif";
    $laptop[0][1] = "hp";
    $laptop[0][2] = "40";

    $laptop[1][0] = "dip";
    $laptop[1][1] = "asus";
    $laptop[1][2] = "50";

    $laptop[2][0] = "moon";
    $laptop[2][1] = "dell";
    $laptop[2][2] = "30";

    for($i=0; $i<count($laptop); $i++){
        for($j=0; $j<count($laptop[$i]); $j++){
            echo $laptop[$i][$j]. " ";
        }
    }
?>