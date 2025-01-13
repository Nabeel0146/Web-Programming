<?php
    echo"Program to display name and sort";

    $names=["neymar", "messi", "ronaldo"];
    echo"<br>Printing using print_r";
    print_r($names);

    echo"a sort";
    asort($names);
    print_r($names);

    echo"ar sort";
    arsort($names);
    print_r($names);

?>
