<?php
function sortArr(array &$arr, $p){//сортировка переданного массива

    for($i = 0; $i < count($arr); $i++) {

        $value = $arr[$i];
        $index = $i;

        for ($n = $i + 1; $n < count($arr); $n++) {
            if (!($value % $p) && $value > $arr[$n] && !($arr[$n] % $p)) {
                $value = $arr[$n];
                $index = $n;
                switchElem($arr, $i, $index);
            }elseif($value % $p && !($arr[$n] % $p)){
                $value = $arr[$n];
                $index = $n;
                switchElem($arr, $i, $index);
            }
        }
    }
}

function switchElem(array &$arr, $elem1, $elem2){//поменять элементы местами

    if($elem1 == $elem2)    return;
    $temp = $arr[$elem1];
    $arr[$elem1] = $arr[$elem2];
    $arr[$elem2] = $temp;
}

$db_array = array(
    array(5, 22, 3, 7, 4),
    array(4, -5, 2, 6, 3),
    array(2, 8, -9, 3, 12),
    array(-22, 81, 91, 30, 32),
    array(24 ,18 , 49, 23, 22)
);
$p = 2;

for($i = 0; $i < count($db_array); $i++){
    sortArr($db_array[$i], $p);
}
print_r($db_array);