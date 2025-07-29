<?php
    //Função para ordenar e exibir a lista de alunos
    function exibir_alunos($alunos) {
        echo "Lista de Alunos Ordenada: \n";
        sort($alunos); // Ordena a lista de alunos
        $alunos = array_reverse($alunos); // Inverte a ordem da lista
        foreach ($alunos as $aluno) {
            // Exibe cada aluno
            echo "Nome do aluno: $aluno, possui " . strlen($aluno) . " letras \n"; 
        }
    }
    ?>