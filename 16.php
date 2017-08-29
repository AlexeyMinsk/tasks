<?php
//диапозон от N до M
$N = 6;
$M = 10000;
$sum = 0;

for($i = $N; $i <= $M; $i++){

    for($x = 1; $x < $i; $x++){//сложить все делители
        $res = $i / $x;

        if(gettype($res) == "integer") {
            $sum += $x;
        }
    }

    if($sum == $i)
        echo $i, "|";

    $sum = 0;
}