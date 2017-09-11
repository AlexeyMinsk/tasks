<?php
function getMaxElement(array $arrA){

    if(!sizeof($arrA))
        die("Массив пуст");

    $i = 0;
    $max = $arrA[0];
    $indexMax = 0;

    while( $i < sizeof($arrA) ){

        if($arrA[$i] > $max) {
            $indexMax = $i;
            $max = $arrA[$i];
        }
        ++$i;
    }
    return $indexMax;
}

function deleteElements(array &$arr, $deleteElem){

    $tempArr = array();

    for($i = 0; $i < count($arr); $i++){

        if($i != $deleteElem)
            $tempArr[] = $arr[$i];
    }
    $arr = $tempArr;
}

$db_array = array(
    array(13, 22, 1, 3, 4),
    array(4, -5, 1, 2, 2),
    array(2, 8, -9, 3, 12),
    array(22, 81, -91, 30, 32),
    array(24 ,18 , 49, 23, 22)
);

for($i = 0; $i < count($db_array); $i++){
    $index = getMaxElement($db_array[$i]);
    deleteElements($db_array[$i], $index);
}

print_r($db_array);