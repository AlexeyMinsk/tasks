<?php
$N = 18;
$M = 96;

$numMin = $N < $M? $N : $M;
$fl = true;

for($i = 2; $i <= $numMin; $i++){

    $res1 = $N / $i;
    $res2 = $M / $i;
    if( (gettype($res1) == "integer") && (gettype($res2) == "integer") ) {
        echo "Наименьший общий делитель - ", $i;
        $fl = false;
        break;
    }
}

if($fl)
    echo "Делителей больше 1 не найдено";