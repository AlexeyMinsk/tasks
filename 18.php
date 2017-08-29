<?php
//диапозон от N до M
$N = 1;
$M = 1000;
$sumFirst = 0;//сумма делителей первого числа
$sumSecond = 0;//сумма делителей второго числа

for($i = $N; $i <= $M; $i++){

    for($x = 1; $x < $i; $x++){//сложить все делители первого числа
        $res = $i / $x;

        if(gettype($res) == "integer") {
            $sumFirst += $x;
        }
    }

    for($y = 1; $y < $sumFirst; $y++){//сложить все делители второго числа
        $res = $sumFirst / $y;

        if(gettype($res) == "integer") {
            $sumSecond += $y;
        }
    }

    if($i == $sumSecond && $i != $sumFirst){
        echo '[ ', $i, ' & ', $sumFirst,  ' ]';
    }

    $sumFirst = 0;
    $sumSecond = 0;
}