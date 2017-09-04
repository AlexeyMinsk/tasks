<?php
function getMaxElement(array $arrA){

    if(!sizeof($arrA))
        die("Массив пуст");

    $i = 0;

    while( $i < sizeof($arrA) ) {
        if( !($arrA[$i] % 2) ) {
            $max = $arrA[$i];
            $indexMax = $i;
            break;
        }
        $i++;
    }

    if( !isset($max) )
        die("В массиеве нет чётных цифр");

    $i = $indexMax + 1;

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

    while( $i < sizeof($arrA) ) {
        if( $arrA[$i] % 2 ) {
            $min = $arrA[$i];
            $indexMin= $i;
            break;
        }
        $i++;
    }

    if( !isset($min) )
        die("В массиеве нет нечётных цифр");

    $i = $indexMin + 1;

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

echo "Максимальное чётное число - $maxArr[1], минимальное нечётное число - $minArr[1]";