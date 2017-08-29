<?php
$N = 3;// заданное число
//разряд числа
$aE = 1;
$bE = 10;
$cE = 100;
$dE = 1000;
$sum = 0;

for($i = 1; $i < 10; $i++){
    for($n = 0; $n < 10; $n++){
        for($x = 0; $x < 10; $x++){
            for($y = 0; $y < 10; $y++){
                $sum = $i + $n + $x + $y;

                if($sum == $N){
                    $M = $i * $dE + $n * $cE + $x * $bE + $y * $aE;
                    echo $M;
                    echo '|';
                }
            }
        }
    }
}
?>