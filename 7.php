<?php
function getExp($num){//получить разряд числа

    $counter = 0;
    $i = 1;
    while($num > $i){

        $i *= 10;
        $counter++;
    }

    return $counter - 1;
}

function getNum($num, $pos){//получить число по порядковому номеру

    $pos = getExp($num) - $pos;
    return ( (int)($num / pow(10, $pos)) ) % 10;

}

$N = 1234567899;//заданное число
$counter = getExp($N);
$M;
$exit = false;

for($i = 0; $i < $counter; $i++){

    $M = getNum($N, $i);

    for($n = $i + 1; $n <= $counter; $n++){
        $t = getNum($N, $n);
        if($M == $t){
            $exit = true;
            break;
        }
    }
    if($exit)
        break;
}

if(!$exit)
    echo "Все цифры уникальны";
else
    echo "Не все цифры уникальны";

