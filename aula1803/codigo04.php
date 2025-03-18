<?php
    $alunos = [
        "Ana",
        "Paulo",
        "Vitoria",
        "Oscar",
        "Adao",
        "Maria"
    ];

    $pri = $alunos[0]; //primeiro
    $ult = $alunos[0];
    for($i = 1; $i <sizeof($alunos); $i++){
        if($pri < $alunos[$i]) $pri = $alunos[$i];
        if($ult > $alunos[$i]) $ult = $alunos[$i];
    }
    echo "Primeiro da ordem : $pri \n";
    echo "Ultimo da ordem: $ult \n";