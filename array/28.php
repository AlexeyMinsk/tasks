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

function deleteElement(array &$arr, $start = 0, $k = 0){

    $tempArr = array();
    $counter = $k;

    for($i = 0; $i < count($arr); $i++){

        if($i <= $start)
            $tempArr[] = $arr[$i];
        elseif($counter)
            $counter--;
        else
            $tempArr[] = $arr[$i];
    }
    $arr = $tempArr;
}

$arrA = array(1, 5, 6, 8, 5, 6, -1);
$k = 2;
$maxIndex = getIndexMax($arrA);
deleteElement($arrA, $maxIndex, $k);

print_r($arrA);