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

$db_array = array(
    array(13, 22, 15, 3, 4),
    array(4, -5, 1, 2, 2),
    array(2, 8, -9, 3, 12),
    array(-22, 81, 91, 30, 32),
    array(24 ,18 , 49, 23, 22)
);

for($i = 0; $i < count($db_array); $i++){
    if($db_array[$i][0] < 0)
        sortArr($db_array[$i]);
}
print_r($db_array[3]);