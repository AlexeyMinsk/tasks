<?php
function getExp($num){//получить разрядность числа

    $counter = 0;
    $i = 1;

    if($num < 10)
        return 0;

    while($num >= $i){

        $i *= 10;
        $counter++;
    }

    return $counter - 1;
}

function getNum($num, $pos){//получить число по порядковому номеру

    $pos = getExp($num) - $pos;
    return ( (int)($num / pow(10, $pos)) ) % 10;

}

$N = 1231;//заданное число
$counter = getExp($N);
$M;
$exit = false;
$numCount = 0;

for($i = 0; $i < $counter; $i++){

    $M = getNum($N, $i);

    for($n = $i + 1; $n <= $counter; $n++){
        $t = getNum($N, $n);
        if($M == $t){
            $numCount++;
        }
    }
    if($numCount == 1){
        $exit = true;
        break;
    }elseif($numCount > 1){
        $exit = false;
        break;
    }
    $numCount = 0;
}

if($exit)
    echo "Есть двойное совпадение";
else
    echo "Нет двойного совпадения";


