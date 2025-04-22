<?php
function verificarSeEhTrinagulo($l1, $l2, $l3){
    if($l1 + $l2 > $l3 && $l1 + $l3 > $l2 && $l2 + $l3 > $l1){
        return true; 
    }else{
        return false;
    }
}
function verTipoDeTriangulo($l1, $l2, $l3){
    if($l1 == $l2 && $l2 == $l3){
        return "Equilátero";
    }else if($l1 == $l2 || $l1 == $l3 || $l2 == $l3){
        return "Isósceles";
    }else{
        return "Escaleno";
    }
}
$a = $_POST['lado1'];
$b = $_POST['lado2'];
$c = $_POST['lado3'];
$resultado = verificarSeEhTrinagulo($a, $b, $c);
if($resultado==true){
    echo "Formam um triângulo! <br>";
    echo "Tipo: " . verTipoDeTriangulo($a, $b, $c) . "<br>";
}else{
    echo "Não formam um triângulo! <br>";
}