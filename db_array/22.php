<?php
function switchColumn(array &$arrA, $column_1, $column_2){

    if($column_1 == $column_2)
        return;

    $tempArr = array();

    for($i = 0; $i < count($arrA); $i++) {
        for($n = 0; $n < count($arrA[$i]); $n++) {

            if($n == $column_1) {
                $tempArr[$i][$n] = $arrA[$i][$column_2];
            }elseif($n == $column_2) {
                $tempArr[$i][$n] = $arrA[$i][$column_1];
            }else {
                $tempArr[$i][$n] = $arrA[$i][$n];
            }
        }
    }
    $arrA = $tempArr;
}

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

function getPriority(array $arr){

    $arrPriority = array();
    $tempArr = $arr;

    sortArr($tempArr);

    for($i = 0; $i < count($tempArr); $i++){
        for($s = 0; $s < count($arr); $s++){

            if($tempArr[$i] == $arr[$s]) {
                $arrPriority[] = $s;
                break;
            }
        }
    }
    return $arrPriority;
}

$db_array = array(
    array(13, 22, 1, 3, 2),
    array(0, 1, 2, 3, 4),
    array(2, 8, -9, 3, 12),
    array(32, 81, -91, 30, 32),
    array(24 ,18 , 49, 23, 22)
);
$orderArr = getPriority($db_array[0]);

for($i = 0; $i < count($db_array[0])/2; $i++)
    switchColumn($db_array, $orderArr[$i], $i);


print_r($db_array[0]);
