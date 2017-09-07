<?php
function getExp($num){//полуучить разряд

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

function changeNum(&$num, $pos1, $pos2, $count){//поменять цифры местами


    $num1 = getNum($num, $pos1);
    $num2 = getNum($num, $pos2);

    $num = $num - ($num1 * pow(10, $count-$pos1) ) + ($num2 * pow(10, $count-$pos1) );
    $num = $num - ($num2 * pow(10, $count-$pos2) ) + ($num1 * pow(10, $count-$pos2) );
}

function deleteNull(&$num){

    $count = getExp($num);

    for($n = 0; $n <= $count; $n++){
        $x = getNum($num, $n);
        if(!$x) {
            $num = deleteNum($num, $n);
            $count--;
            $n--;
        }
    }
}

function deleteNum($num, $pos){//удалить цифру с заданной позиции

    $counter = getExp($num);

    if(!$counter)
        return 0;

    $res = 0;
    $kor = 0;

    for($i = 0; $i <= $counter; $i++) {

        $x = getNum($num, $i);
        $kor++;

        if ( $i != $pos) {
            $res += $x * pow(10, $counter - $kor);
        }
        else{
            $kor--;
        }
    }
    return $res;
}

$N = 9850210;//заданное число
deleteNull($N);
$count = getExp($N);

for($i = 0; $i <= $count; $i++){

    $num = getNum($N, $i);

    $min = $num;
    $posCurNum = $i;

    for($n = $i + 1; $n <= $count; $n++) {

        $tempNum = getNum($N, $n);

        if($min > $tempNum){
            $min = $tempNum;
            $posMinNum = $n;
        }
    }

    if($num > $min){
        changeNum($N, $i, $posMinNum, $count);
    }
}

echo $N;