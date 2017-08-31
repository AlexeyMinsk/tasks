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

function volUp(&$N){

    $count = getExp($N);

    for($i = 0; $i <= $count; $i++){

        $num = getNum($N, $i);
        $max = $num;
        $posCurNum = $i;

        for($n = $i + 1; $n <= $count; $n++) {

            $tempNum = getNum($N, $n);
            if($max < $tempNum){
                $max = $tempNum;
                $posMaxNum = $n;
            }
        }

        if($num < $max)
            changeNum($N, $i, $posMaxNum, $count);
    }
}

$n1 = 2556457;//ряд чисел
$n2 = 29543578;
$n3 = 112342;

volUp($n1);
echo $n1, '|';
volUp($n2);
echo $n1, '|';
volUp($n3);
echo $n1, '|';