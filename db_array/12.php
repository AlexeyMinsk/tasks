<?php
function getMinElement(array $arrA, $column){

    if(!sizeof($arrA))
        die("Массив пуст");

    $min = $arrA[0][0];

    for($i = 0; $i < count($arrA); $i++) {
        if ($arrA[$i][$column] < $min)
            $min = $arrA[$i][$column];
    }

    return $min;
}

function insertElem(array &$arr, $elem, $pos = 0){

    $arrB = array();
    $size = count($arr);

    for($i = 0; $i < $size; $i++){

        if($i == $pos)
            $arrB[] = $elem;

        $arrB[] = $arr[$i];
    }
    $arr = $arrB;
}

$db_array = array(
    array(13, 22, 81, 3, 4),
    array(4, -5, 1, 2, 2),
    array(2, 8, -9, 3, 12),
    array(22, 81, -91, 30, 32),
    array(24 ,18 , 49, 23, 22)
);

for($i = 0; $i < count($db_array); $i++){

    $min = getMinElement($db_array, $i);
    $find = true;

    for($n = 0; $n < count($db_array[$i]); $n++){

        if($db_array[$i][$n] < 0) {
            insertElem($db_array[$i], $min, $n+1);
            $find = false;
            break;
        }
    }
    if($find)
        insertElem($db_array[$i], $min);
}

print_r($db_array);