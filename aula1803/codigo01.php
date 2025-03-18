<?php
$num = [35, 1, 10, 23, 9, 23];
//subindo o indice
for ($i = 0; $i < sizeof($num); $i++) {
    echo "Valor na posicao $i => $num[$i]  \n";
}
//descendo o indice
for ($i = sizeof($num) - 1; $i >= 0; $i--) {
    echo "Valor na posicao $i => $num[$i]  \n";
}
