<?php

/*
No exemplo passado no form não aconteceu o caso em que
dois numeros se repetiam a mesma quantidade de vezes.
Resolvi deixar o programa exibir os dois numeros e a
quantidade de vezes que eles se repetem, acho justo kk
 */

$array = [];
$qtdNumeros = 20;

for ($i = 0; $i < $qtdNumeros; $i++){
    $ele = rand(1, 10);
    array_push($array, $ele);
}

$arrayRepetidos = array_count_values($array);
sort($arrayRepetidos);

foreach ($arrayRepetidos as $valorRepetido => $qtdRepetida){
    if ($qtdRepetida == end($arrayRepetidos)){
        echo "O número que mais se repete é o {$valorRepetido}" . PHP_EOL;
        echo "Ele se repete {$qtdRepetida}" . PHP_EOL;
    }
}
