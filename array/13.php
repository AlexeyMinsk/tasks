<?php
function getMaxElement(array $arrA, $exception = null){

    if(sizeof($arrA) < 2)
        die("Массив недостаточной длинны");

    $i = 0;
    $max = $arrA[0];
    $indexMax = 0;

    while( $i < sizeof($arrA) ){

        if( $arrA[$i] > $max &&  $arrA[$i] !== $exception) {
            $indexMax = $i;
            $max = $arrA[$i];
        }
        ++$i;
    }

    return [$indexMax, $max];
}

function getMinElement(array $arrA, $exception = null){

    if(sizeof($arrA) < 2)
        die("Массив недостаточной длинны");

    $i = 0;
    $min = $arrA[0];
    $indexMin = 0;

    while( $i < sizeof($arrA) ){

        if( $arrA[$i] < $min &&  $arrA[$i] !== $exception) {
            $indexMin = $i;
            $min = $arrA[$i];
        }
        ++$i;
    }

    return [$indexMin, $min];
}

$arrayNum = array(5, -33, 4, -22, 789, 22);
$tempArr = array();

$maxArr = getMaxElement($arrayNum);
$tempArr[0] = $maxArr[1];
$maxArr = getMaxElement($arrayNum, $tempArr[0]);
$tempArr[1] = $maxArr[1];
$minArr = getMinElement($arrayNum);
$tempArr[2] = $minArr[1];
$minArr = getMinElement($arrayNum, $tempArr[2]);
$tempArr[3] = $minArr[1];

echo "Максимальные числа массива - $tempArr[0] и $tempArr[1],минимальные числа массива - $tempArr[2] и $tempArr[3]";