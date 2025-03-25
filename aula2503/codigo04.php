<?php
    $vetor1 = [3, 3, 2, 2, 5];
    $vetor2 = [2, 3, 1, 5, 4];
    
    //$vetor3 terá a soma dos dois anteriores
    $vetor3 = [];
    for ($i=0; $i < 5; $i++) { 
        $vetor3[$i] = $vetor1[$i] + $vetor2[$i];
        echo " [ $vetor3[$i] ] "; //imprimir o valor entre [  ]
    }