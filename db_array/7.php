<?php
function getMaxElemTriangle(array $db_arr, $pos = true){

    $temp_arr = array();//значение, индексы(2)

    for($n = 0; $n < count($db_arr); $n++){
        for($m = 0; $m < count($db_arr[$n]); $m++){
            if($pos && $n < $m) {
                if (!isset($temp_arr[0]) || $temp_arr[0] < $db_arr[$n][$m])
                    initTemp($temp_arr, $db_arr[$n][$m], $n, $m);
            }elseif(!$pos && $n > $m) {
                if (!isset($temp_arr[0]) || $temp_arr[0] < $db_arr[$n][$m])
                    initTemp($temp_arr, $db_arr[$n][$m], $n, $m);
            }
        }
    }
    return $temp_arr;
}

function initTemp(array &$temp_arr, $value, $index1, $index2){

    $temp_arr[0] = $value;
    $temp_arr[1] = $index1;
    $temp_arr[2] = $index2;
}

function switchElem(array &$arr, $x1, $y1, $x2, $y2){

    $temp = $arr[$x1][$y1];
    $arr[$x1][$y1] = $arr[$x2][$y2];
    $arr[$x2][$y2] = $temp;
}

$db_array = array(
    array(13, 22, 1, 3, 4),
    array(4,-5, 1, 2, 2),
    array(2,8,-9, 3, 12),
    array(22,81,-91, 30, 32),
    array(24 ,18 , 49, 23, 22)
);

$up = getMaxElemTriangle($db_array);
$down = getMaxElemTriangle($db_array, false);
switchElem($db_array, $up[1], $up[2], $down[1], $down[2]);
print_r($db_array);