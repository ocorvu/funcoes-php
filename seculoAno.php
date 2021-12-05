<?php

function seculoAno($ano){

    echo $ano % 100 . PHP_EOL; 

    if ( $ano % 100 > 0) {
        return "século " . (intdiv($ano , 100) + 1);
    } else {
        return "século " . (intdiv($ano , 100));
    }
}

echo seculoAno(1700);




