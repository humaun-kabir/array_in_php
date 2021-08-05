<?php
    $fees = array("moon"=>500,"mohona"=>700,"mahi"=>800);

    foreach($fees as $money){
        echo $money . "<br>";
    }

    foreach($fees as $key=> $money){
        echo $key . " = ".$money . "<br>";
    }
?>