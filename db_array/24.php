<?php
function sortArr(array &$arr){

    for($i = 0; $i < count($arr); $i++){

        $value = $arr[$i];
        $index = $i;

        for($n = $i+1; $n < count($arr); $n++){
            if( ($value < $arr[$n] && $arr[$n]) ||
            !$value && $arr[$n]){
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

$db_array = array(
    array(13, 22, 1, 3, 2),
    array(0, 1, -2, 3, 4),
    array(2, 8, -9, -3, 0),
    array(32, 81, -91, 30, 32),
    array(24 ,18 , 0, -23, -22)
);

for($i = 0; $i < count($db_array); $i++){
    sortArr($db_array[$i]);
}
print_r($db_array);