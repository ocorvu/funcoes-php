<?php

/*
Não consegui passar em todos os testes :(
*/

$arrayTeste = [
    [1, 3, 2, 1],  
    [1, 3, 2]  ,
    [1, 2, 1, 2]  ,
    [3, 6, 5, 8, 10, 20, 15] ,
    [1, 1, 2, 3, 4, 4] ,
    [1, 4, 10, 4, 2] ,
    [10, 1, 2, 3, 4, 5] ,
    [1, 1, 1, 2, 3] ,
    [0, -2, 5, 6] ,
    [1, 2, 3, 4, 5, 3, 5, 6] ,
    [40, 50, 60, 10, 20, 30] ,
    [1, 1] ,
    [1, 2, 5, 3, 5] ,
    [1, 2, 5, 5, 5] ,
    [10, 1, 2, 3, 4, 5, 6, 1] ,
    [1, 2, 3, 4, 3, 6] ,
    [1, 2, 3, 4, 99, 5, 6] ,
    [123, -17, -5, 1, 2, 3, 12, 43, 45],
    [3, 5, 67, 98, 3]
    ];

function sequenciaCrescente(array $array){

    $diferencas = 0;
    $problema = '-1';

    foreach ($array as $posicao => $valor){
        for($i = 0; $i < $posicao; $i++){
            $resultado = $valor - $array[$i];
            if ($resultado <= 0){
                if ($array[$i] != $problema){
                    $problema = $array[$i];
                    $diferencas++;
                }
            }
        }
    }

    if ($diferencas > 1){
        return false;
    } else {
        return true;
    }
}

foreach ($arrayTeste as $array){
    var_dump(sequenciaCrescente($array));
}