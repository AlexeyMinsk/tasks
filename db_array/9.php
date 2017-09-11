<?php
function testNegColumn(array &$arr, $col){

    $counter = 0;
    $sum = 0;

    for($i = 0; $i < count($arr); $i++) {
        if ($arr[$i][$col] < 0) {
            $sum += $arr[$i][$col];
            $counter++;
        }
    }

    if(count($arr) == $counter){
        for($i = 0; $i < count($arr); $i++)
            $arr[$i][$col] = $sum;
    }
}

$db_array = array(
    array(13, -22, 1, 3, 4),
    array(4, -5, 1, 2, 2),
    array(2, -8, -9, 3, 12),
    array(22, -81, -91, 30, 32),
    array(24 ,-18 , 49, 23, 22)
);
/*
 При условии, что массивы многомерного массива имеют разный рамер,
подсчёт будет проводиться по самому короткому
*/
$sizeColumn = count($db_array[0]);

for($i = 1; $i < count($db_array); $i++){

    if($sizeColumn > count($db_array[$i]) )
        $sizeColumn = count($db_array[$i]);
}

for($n = 0; $n < $sizeColumn; $n++)
    testNegColumn($db_array, $n);

print_r($db_array);