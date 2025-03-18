<?php
    $num = [31, 15, 12, 2, 4, 88, 12, 8, 7, 5];
    for ($i=0; $i < sizeof($num); $i++) { 
        for($j= $i+1; $j < sizeof($num); $j++){
            if($num[$i] > $num[$j]){
                $troca = $num[$i];
                $num[$i] = $num[$j];
                $num[$j] = $troca;
            }
        }
    }

    for($i=0; $i<sizeof($num); $i++){
        echo "$num[$i] -  ";
    }