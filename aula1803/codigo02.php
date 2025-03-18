<?php
    $notas = [8.9, 3.6, 5.1, 9.9, 1.5, 10];
    $soma = 0;
    for($i=0; $i<sizeof($notas); $i++){
        $soma = $soma + $notas[$i];
    }
    $media = $soma / sizeof($notas);
    echo "Media das notas: $media \n";