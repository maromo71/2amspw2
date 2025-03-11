<?php
    $x = 10;
    $x++;
    echo $x . "\n";

    function modifica(){
        global $x;
        $x = 30;
        echo $x . "\n";
    }
    modifica();
    
    echo $x . "\n";