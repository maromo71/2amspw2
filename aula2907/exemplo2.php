<?php
    //incluir o arquivo biblioteca2.php
    include_once "biblioteca2.php";

    //Definir uma lista de alguns alunos
    $alunos = [
        "Marcos Moraes",
        "João da Silva",
        "Maria Oliveira",
        "Ana Souza",
        "Pedro Santos"
    ];

    exibir_alunos($alunos);