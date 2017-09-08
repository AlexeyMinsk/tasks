<?php
function sortArr(array &$arr, $sort = true){

    for($i = 0; $i < count($arr); $i++){

        if($arr[$i] < 0)
            continue;

        $value = $arr[$i];
        $index = $i;

        for($n = $i+1; $n < count($arr); $n++){

            if($arr[$n] < 0)
                continue;

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

function switchElem(array &$arr, $elem1, $elem2){

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

        if($arr[$i] > $elem && $fl){
            $arrB[] = $elem;
            $fl = false;
        }
        $arrB[] = $arr[$i];

        if($fl && $size == ($i+1) )
            $arrB[] = $elem;
    }
    $arr = $arrB;
}

function getNewArray(array $arr, $even = true){

    $tempArr = array();
    for($i = 0; $i < count($arr); $i++){

        if( !($arr[$i]%2) && $even){
            $tempArr[] = $arr[$i];
        }elseif($arr[$i]%2 && !$even){
            $tempArr[] = $arr[$i];
        }
    }
    return $tempArr;
}

$arrA = array(9,88,4,2,1, -1, 55, 777);

sortArr($arrA);
insertElem($arrA, 99);
print_r($arrA);