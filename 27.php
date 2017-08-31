<?php
function getSum($num){//получить сумму делителей числа $num

    $tempNum = 0;

    for($i = 1; $i <= $num; $i++){

        $res = $num / $i;

        if(gettype($res) == "integer" && testPrimal($i)) {
            $tempNum += $i;
        }
    }

    return $tempNum;
}

function testMaxSum($currentSum, &$maxSum, &$tempNum, $currentNum){

    if($maxSum < $currentSum) {

        $maxSum = $currentSum;
        $tempNum = $currentNum;
    }
}

function testPrimal($N){

    $fl = true;

    for($n = 2; $n <= $N / 2; $n++) {

        $res = $N / $n;

        if( gettype($res) == "integer"){
            $fl = false;
            break;
        }
    }

    return $fl;
}

$n1 = 25;//ряд чисел
$n2 = 29;
$n3 = 11;

$maxSum = 0;
$tempNum;

$x = getSum($n1);
testMaxSum($x, $maxSum, $tempNum, $n1);
$x = getSum($n2);
testMaxSum($x, $maxSum, $tempNum, $n2);
$x = getSum($n3);
testMaxSum($x, $maxSum, $tempNum, $n3);

echo "Максимальная сумма простых делителей - ", $maxSum, ", у числа - ", $tempNum;
