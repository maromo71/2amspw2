<?php
    $notas = [8.9, 3.6, 5.1, 9.9, 1.5, 3, 8.8, 9.1];
    $maior = $notas[0]; //primeiro
    $menor = $notas[0];
    for($i = 1; $i <sizeof($notas); $i++){
        if($maior < $notas[$i]) $maior = $notas[$i];
        if($menor > $notas[$i]) $menor = $notas[$i];
    }
    echo "Maior nota da sala: $maior \n";
    echo "Menor nota da sala: $menor \n";