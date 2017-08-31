<?php
function getFactorial($f){

    $fact = 1;

	for ($i = 1; $i <= $f; $i++)
		$fact *= $i;

	return $fact;
}

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

function testSumFact($num){//проверка равенства суммы факториалов цифр числа

    $counter = getExp($num);
    $sum = 0;

    for($i = 0; $i <= $counter; $i++){

        $a = getNum($num, $i);
        $sum += getFactorial($a);
    }

    if($sum == $num)
        return $sum;
    else
        return 0;
}

$n1 = 145;//ряд чисел
$n2 = 2;
$n3 = 11;

$count = 0;//счётчик чисел равных сумме факториалов своих цифр
$sum = 0;//сумма чисел
$tempSum = 0;

if($tempSum = testSumFact($n1)){
    $count++;
    $sum += $tempSum;
    $tempSum = 0;
}

if($tempSum = testSumFact($n2)){
    $count++;
    $sum += $tempSum;
    $tempSum = 0;
}

if($tempSum = testSumFact($n3)){
    $count++;
    $sum += $tempSum;
    $tempSum = 0;
}

echo "Количество чисел равных сумме факториалов своих цифр ", $count,
". Сумма чисел равных сумме факториалов своих цифр ",$sum;

