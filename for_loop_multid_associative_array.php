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


    $keys = array_keys($fees);

    for($i=0; $i<count($keys); $i++){
        $fees_keys = array_keys($fees[$keys[$i]]);
        for($j=0;$j<count($fees_keys); $j++){
            echo ($keys[$i] . " " . $fees_keys[$j] . " ". $fees[$keys[$i]][$fees_keys[$j]] . " ");
        }
    }
?>