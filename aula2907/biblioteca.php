<?php
    //Função para encontrar o maior valor do vetor
    function maior_valor($vetor){
        $maior = $vetor[0];
        for($i=1; $i < count($vetor); $i++){
            if($vetor[$i] > $maior){
                $maior = $vetor[$i];
            }
        }
        return $maior;
    }
    //Função para encontrar o menor valor do vetor
    function menor_valor($vetor){
        $menor = $vetor[0];
        for($i=1; $i < count($vetor); $i++){
            if($vetor[$i] < $menor){
                $menor = $vetor[$i];
            }
        }
        return $menor;
    }

    //Função para exibir o vetor
    function exibir_vetor($vetor){
        echo "Vetor: \n";
        foreach($vetor as $valor){
            echo "$valor \n";
        }
    }
?>