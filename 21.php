<?php
$N = 18;
$M = 21;
$check = true;
$numMin = $N < $M? $N : $M;

for($i = 2; $i <= $numMin; $i++){

    $res = $N / $i;

    if(gettype($res) == "integer") {
        $res = $M / $i;

        if(gettype($res) == "integer"){
            $check = false;
            break;
        }
    }
}

if($check)
    echo "Числа взаимно простые";
else
    echo "Числа не взаимно простые";
