<?php
function getExp($num){//получить разряд

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

function getSum($N){//сложить все цифры числа

    $counter = getExp($N);
    $sum = 0;

    for($i = 0; $i <= $counter; $i++){

        $sum += getNum($N, $i);
    }
    return $sum;
}

function testValue($n, $k){// проверка на равенство

    $sum = getSum($n);

    if( $sum == $k )
        echo "Сумма цифр числа $n равна заданному числу|->";
    elseif( $sum > $k ) {
        $n = combinator($n, $k, $sum);
        testValue($n, $k);
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

        if ( $i != $pos)
            $res += $x * pow(10, $counter - $kor);
        else{
            $kor--;
        }
    }
    return $res;
}

function combinator($num, $k, $sum){//подбор возможных комбинаций

    $counter = getExp($num);

    if(!$counter)
        return 0;

    $fl = 0;//возможная комбинация

    for($i = 0; $i <= $counter; $i++){

        $x = getNum($num, $i);

        if($sum - $x == $k){
            return  deleteNum($num, $i);
        }elseif($sum - $x < $k){
            continue;
        }else{
            $n = deleteNum($num, $i);
            $fl = combinator($n, $k, getSum($n));
            if(getSum($fl) == $k)
                break;
        }
    }
    return $fl;
}


$n1 = 1211;//ряд чисел
$n2 = 2854;
$n3 = 112;

$k = 13;//заданное число

testValue($n1, $k);
testValue($n2, $k);
testValue($n3, $k);