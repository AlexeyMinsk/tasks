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
function getMinValue(array $arrA){
    $i = 0;
    $min = $arrA[0];
    while( $i < sizeof($arrA) ){
        if( $arrA[$i] < $min)
            $min = $arrA[$i];
        ++$i;
    }
    return $min;
}
$arrA = array(1, 55, 15, 77, 54, -1, 66);
$k = 3;
$indexMax = getIndexMax($arrA);
$minValue = getMinValue($arrA);
for($i = $indexMax+1; $i < ($indexMax + 1 + $k) && $i < count($arrA); $i++)
    $arrA[$i] = $minValue;
print_r($arrA);