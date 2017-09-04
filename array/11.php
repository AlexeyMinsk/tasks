<?php
function getMaxElement(array $arrA){

    if(!sizeof($arrA))
        die("Массив пуст");

    $i = 0;
    $max = $arrA[0];

    while( $i < sizeof($arrA) ){

        if( $arrA[$i] > $max && !($arrA[$i]%2) ) {
            $indexMax = $i;
            $max = $arrA[$i];
        }
        ++$i;
    }
    return [$indexMax, $max];
}

function getMinElement(array $arrA){

    if(!sizeof($arrA))
        die("Массив пуст");

    $i = 0;
    $min = $arrA[0];

    while( $i < sizeof($arrA) ){

        if( $arrA[$i] < $min){
            $indexMin = $i;
            $min = $arrA[$i];
        }
        ++$i;
    }
    return [$indexMin, $min];
}

$arrayNum = array(1, -33, 4, 444, 789, 22);

$maxArr = getMaxElement($arrayNum);
$minArr = getMinElement($arrayNum);
$i = 0;

while($i < $maxArr[0]){

    if($arrayNum[$i] < 0){
        $neg = $arrayNum[$i];
        break;
    }
    $i++;
}

if( !isset($neg) )
    die("Нет предшествующий максимальному числу в массиве отрицательных чисел");

$i = count($arrayNum) - 1;

while($i > $minArr[0]){

    if($arrayNum[$i] > 0){
        $pos = $arrayNum[$i];
        break;
    }
    $i--;
}

if( !isset($pos) )
    die("Нет следующих за минимальным числом в массиве положительных чисел");

echo "Первое предшествующее  максимальному числу в массиве отрицательное число - $neg, 
последний положительный элемент, стоящий за минимальным элементом - $pos";



