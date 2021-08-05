<?php
    $fees = array("moon"=>500,"mohona"=>700,"mahi"=>800);
    $keys = array_keys($fees);

    for($i=0;$i<count($keys);$i++){
            echo $keys[$i] ." = ". $fees[$keys[$i]]. "<br>";
        }
?>