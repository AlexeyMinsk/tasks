<?php
function sortArr(array &$arr, $sort = true){

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

function switchElem(array &$arr, $elem1, $elem2){

    if($elem1 == $elem2)    return;
    $temp = $arr[$elem1];
    $arr[$elem1] = $arr[$elem2];
    $arr[$elem2] = $temp;
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
$arrB = array();//чётные
$arrC = array();//нечётные

$arrB = getNewArray($arrA);
sortArr($arrB);
$arrC = getNewArray($arrA, false);
sortArr($arrC, false);

for($i = 0; $i < count($arrC);$i++)
    $arrB[] = $arrC[$i];

print_r($arrB);