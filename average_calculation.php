<?php
    $total=0;

    for ($i=0; $i<$_POST["count"]; $i++){
        $total=$total+$_POST["$i"];
    }

    $average=$total/$_POST["count"];
    echo("average is:$average")
?>