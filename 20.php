<?php
$N = 18;
$M = 21;
$sumMax = 0;
$sum = 0;
$maxNum;

for($i = $N; $i <= $M; $i++){

    for($x = 1; $x < $i; $x++){//сложить все делители
        $res = $i / $x;

        if(gettype($res) == "integer") {
            $sum += $x;
        }
    }

    if($sum > $sumMax) {
        $sumMax = $sum;
        $maxNum = $i;
    }

    $sum = 0;
}

echo "Наибольшая сумма делителей у числа - ", $maxNum;