<?php
function sortArr(array &$arr, $sort = true){//сортировка переданного массива

    for($i = 0; $i < count($arr); $i++){

        $value = $arr[$i];
        $index = $i;

        for($n = $i+1; $n < count($arr); $n++){

            if($value > $arr[$n] && $sort){
                $value = $arr[$n];
                $index = $n;
            }elseif($value < $arr[$n] && !$sort){
                $value = $arr[$n];
                $index = $n;
            }
        }
        switchElem($arr, $i, $index);
    }
}

function switchElem(array &$arr, $elem1, $elem2){//поменять элементы местами

    if($elem1 == $elem2)    return;
    $temp = $arr[$elem1];
    $arr[$elem1] = $arr[$elem2];
    $arr[$elem2] = $temp;
}

function insertElem(array &$arr, $elem){

    $fl = true;
    $arrB = array();
    $size = count($arr);

    for($i = 0; $i < $size; $i++){

        if($arr[$i] < $elem && $fl){
            $arrB[] = $elem;
            $fl = false;
        }
        $arrB[] = $arr[$i];

        if($fl && $size == ($i+1) )
            $arrB[] = $elem;
    }
    $arr = $arrB;
}

$db_array = array(
    array(5, 22, 3, -7, 4),
    array(4, -5, 2, 6, 3),
    array(2, 8, -9, 3, 12),
    array(-22, 81, 91, 30, 32),
    array(24 ,18 , 49, 23, -22)
);
$p = 19;

for($i = 0; $i < count($db_array); $i++){
    sortArr($db_array[$i], false);
    insertElem($db_array[$i], $p);
}
print_r($db_array);