<?php
function testNum($num, $p){

    if($num == 0 || $p == 0)
        return false;

    if($num % $p)
        return false;
    else
        return true;
}

$db_array = array(
    array(130, 0, 0, 3, 4),
    array(4,-5, 1, 2, 2),
    array(2,8,-9, 3, 12)
);
$p = 2;
$sizeLine = count($db_array);
$sizeColumn = count($db_array[0]);
/*
 При условии, что массивы многомерного массива имеют разный рамер,
подсчёт будет проводиться по самому короткому
*/

for($i = 1; $i < $sizeLine; $i++){

    if($sizeColumn > count($db_array[$i]) )
        $sizeColumn = count($db_array[$i]);
}

for($column = 0; $column < $sizeColumn; $column++){

    $counter = 1;
    $sum = 0;

    for($line = 0; $line < $sizeLine; $line++) {

        if (testNum($db_array[$line][$column], $p)) {
            $sum += $db_array[$line][$column];
            $counter++;
        }
    }

    if($counter == $sizeColumn-1)
        echo "column - $column, sum = $sum  | ";
}