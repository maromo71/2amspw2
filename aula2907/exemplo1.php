<?php
    //incluir o arquivo biblioteca.php
    include_once "biblioteca.php";
    //exemplo1.php
    //Criar funções e invocar funções.

    $vetor = [ 31, 17, 5, 9, 11];

    exibir_vetor($vetor);
    
    //Invocar a função
    $maior = maior_valor($vetor);
    $menor = menor_valor($vetor);
    echo "O menor valor do vetor é: $menor \n";
    echo "O maior valor do vetor é: $maior";