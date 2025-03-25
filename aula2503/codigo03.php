<?php

//Crie um script com um vetor de inteiros 
//e um valor inteiro x. Mostre a quantidade 
// de vezes que x aparece no array.

$x = 10;
$vetor = [1, 3, 10, 10, 2, 4, 10, 8, 10];
//quantos 10 tenho no vetor (x) ????
$cont = 0;
for($i = 0; $i<sizeof($vetor); $i++){
    if($vetor[$i] == $x) $cont++;
}
echo "Foram encontrados $cont ---> $x <--- no vetor \n";