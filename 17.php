<?php
$N = 18;
$M = 96;

$numMin = $N < $M? $N : $M;
$fl = true;

for($i = $numMin; $i > 1; $i--){

    $res1 = $N / $i;
    $res2 = $M / $i;
    if( (gettype($res1) == "integer") && (gettype($res2) == "integer") ) {
        echo "Наибольший делитель - ", $i;
        $fl = false;
        break;
    }
}

if($fl)
    echo "Делителей больше 1 не найдено";