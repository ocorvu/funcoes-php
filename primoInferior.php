<?php

function primoInferior($num){

    if ($num <= 0) {
        echo 0;
        return 0;
    }
    
    $contador = 1;
    $divisores = 0;
    $numerosPrimos = [];
    
    while($contador < $num){

        for ($i = 1; $i <= $contador; $i++){
            if ($contador % $i == 0){
                $divisores++;
            }
        }
        if ($divisores <= 2){
            array_push($numerosPrimos, $contador);
        }
        $divisores = 0;
        $contador++;
    }
    return end($numerosPrimos);
}


echo primoInferior(29);

