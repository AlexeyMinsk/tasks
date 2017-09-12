<?php
function getColumn(array $arrA, $flag = true){

    if(!sizeof($arrA))
        die("Массив пуст");

    $min = $arrA[0][0];
    $max = $arrA[0][0];
    $column = 0;

    for($i = 0; $i < count($arrA); $i++) {
        for($n = 0; $n < count($arrA[$i]); $n++) {
            if ($arrA[$i][$n] < $min && !$flag) {
                $min = $arrA[$i][$n];
                $column = $n;
            }
            if ($arrA[$i][$n] > $max && $flag) {
                $max = $arrA[$i][$n];
                $column = $n;
            }
        }
    }
    return $column;
}

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

$db_array = array(
    array(13, 22, 81, 3, 4),
    array(4, -5, 1, 2, 2),
    array(2, 8, -9, 3, 12),
    array(22, 81, -91, 30, 32),
    array(24 ,18 , 49, 23, 222)
);

$min_column= getColumn($db_array, false);
$max_column= getColumn($db_array);
switchColumn($db_array, $min_column, $max_column);
print_r($db_array);