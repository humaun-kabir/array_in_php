<?php
    $fees = array("moon"=>500,"mohona"=>700,"mahi"=>800);

    $keys = array_keys($fees);

    $i = 0;

    while($i<count($keys)){
        echo $keys[$i] . " = " . $fees[$keys[$i]]. "<br>";
        $i++;
    }


?>