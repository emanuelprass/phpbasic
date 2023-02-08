<?php
    //simple array
    $arr = [
        "fruit" => "Banana",
        "drink" => "Milk",
        "food" =>    "Chicken Nugget"
    ];
    echo $arr["fruit"];

    //nested array
    $array = [
        "odd" => 1,
        "even" => array(2, 4, 6, 8),
    ];
    echo $array["odd"];
    echo $array["even"][0];
    echo $array["even"][1];
    echo $array["even"][2];
    echo $array["even"][3];
?>