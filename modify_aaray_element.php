<?php
    $fees["tausif"] = 100;
    $fees["sizer"] = 300;
    $fees["dip"] = 100;
    $fees["sadat"] = 200;

    echo $fees["tausif"];

    $fees["tausif"] = "java";
    echo $name["tausif"];

    // deleting an array unset() function is used to delete an array element.
    // 	Syntax : 
    //     unset($aaray_name[]);
    // Ex: 
    //     unset($name[2]);

    $fees["tausif"] = 100;
    $fees["sizer"] = 300;
    $fees["dip"] = 100;
    $fees["sadat"] = 200;

    unset($fees["sizer"]);
    echo $fees["sizer"];

    // copy an array

    // we can copy entire array using assignment operator

    $tution = $fees;

    echo $tution["tausif"];

?>