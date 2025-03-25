<?php
    //Algoritmo para determinar qtos impares temos no vetor
    $v = [-1, -2, 3, 5, -1, 6];

    $cont = 0;
    for ($i=0; $i < sizeof($v); $i++) { 
        if($v[$i] < 0) $cont++;
    }

    echo "Total de numeros impares: $cont";