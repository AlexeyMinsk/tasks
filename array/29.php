<?php
function getIndexMax(array $arrA){
    $i = 0;
    $max = $arrA[0];
    $indexMax = 0;
    while( $i < sizeof($arrA) ){
        if( $arrA[$i] > $max){
            $indexMax = $i;
            $max = $arrA[$i];
        }
        ++$i;
    }
    return $indexMax;
}

function getIndexMin(array $arrA){
    $i = 0;
    $min = $arrA[0];
    $indexMin = 0;
    while( $i < sizeof($arrA) ){
        if( $arrA[$i] < $min){
            $indexMin = $i;
            $min = $arrA[$i];
        }
        ++$i;
    }
    return $indexMin;
}

function deleteElements(array &$arr, $start = 0, $finish = 0){

    $tempArr = array();

    if($finish < $start){
        $temp = $start;
        $start = $finish;
        $finish = $temp;
    }

    for($i = 0; $i < count($arr); $i++){

        if($i <= $start)
            $tempArr[] = $arr[$i];
        elseif( !($i > $start && $i < $finish) )
            $tempArr[] = $arr[$i];

    }
    $arr = $tempArr;
}

$arrA = array(-11, 5, 6, 8, 5, 6, -1);

$maxIndex = getIndexMax($arrA);
$minIndex = getIndexMin($arrA);
deleteElements($arrA, $minIndex, $maxIndex);

print_r($arrA);