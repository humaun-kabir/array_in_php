<?php
    // the array_key() function returns an array containing the keys.
    // syntax : array_keys(array,value,strict)
    $fees = array("moon"=>500,"mohona"=>700,"mahi"=>800);
    $keys = array_keys($fees);
    //$keys = array_keys($fees,500);

    echo $keys[1] . "<br>";

    // for($i=0;$i<=2;$i++){
    //     echo $keys[$i] . "<br>";
    // }

?>