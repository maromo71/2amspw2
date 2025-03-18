<?php
    $num = [ 33, 1, 5, 8, 1, 3, 8, 10, 3];

    sort($num);

    for ($i=0; $i < sizeof($num); $i++) { 
        echo "$num[$i] -  ";
    }