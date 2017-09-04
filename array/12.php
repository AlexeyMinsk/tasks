<?php
function getMaxElement(array $arrA){

    if(!sizeof($arrA))
        die("Массив пуст");

    $i = 0;

    while( $i < sizeof($arrA) ) {
        if( $arrA[$i] < 0 ) {
            $maxNeg = $arrA[$i];
            $indexMax = $i;
            break;
        }
        $i++;
    }

    $i++;

    while( $i < sizeof($arrA) ){

        if( $arrA[$i] > $maxNeg && $arrA[$i] < 0 ) {
            $indexMax = $i;
            $maxNeg = $arrA[$i];
        }
        ++$i;
    }

    return [$indexMax, $maxNeg];
}

function getMinElement(array $arrA){

    if(!sizeof($arrA))
        die("Массив пуст");

    $i = 0;

    while( $i < sizeof($arrA) ) {
        if( $arrA[$i] > 0 ) {
            $minPos = $arrA[$i];
            $indexMin = $i;
            break;
        }
        $i++;
    }

    $i++;

    while( $i < sizeof($arrA) ){

        if( $arrA[$i] < $minPos && $arrA[$i] > 0 ) {
            $indexMin = $i;
            $minPos = $arrA[$i];
        }
        ++$i;
    }

    return [$indexMin, $minPos];
}

$arrayNum = array(5, -33, 4, -22, 789, 22);

$maxArr = getMaxElement($arrayNum);
$minArr = getMinElement($arrayNum);

echo "Максимальное число из отрицательных - $maxArr[1],
минимальное число из положительных - $minArr[1]";