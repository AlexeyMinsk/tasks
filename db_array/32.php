<?php
function switchElem(array &$arr, $elem1, $elem2){//поменять элементы местами

    if($elem1 == $elem2)    return;
    $temp = $arr[$elem1];
    $arr[$elem1] = $arr[$elem2];
    $arr[$elem2] = $temp;
}

$db_array = array(
    array(5, 22, 3, -7, 4),
    array(4, -5, 2, 6, 3),
    array(2, 8, -9, 3, 12),
    array(-22, 81, 91, 30, 32),
    array(24 ,18 , 49, 23, -22)
);

for($i = 0; $i < count($db_array); $i++){
    for($n = 0; $n < count($db_array[$i]); $n++){
        if($db_array[$i][$n] < 0){
            switchElem($db_array[$i], $i, $n);
            break;
        }
    }
}
print_r($db_array);