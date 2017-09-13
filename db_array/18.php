<?php
function getColumn(array $arrA){

    if(!sizeof($arrA))
        die("Массив пуст");

    $size = count($arrA[0]);

    for($m = 0; $m < $size; $m++) {
        $counter = 0;

        for($n = 0; $n < count($arrA); $n++) {
            if ($arrA[$n][$m]%2) {
                $counter++;
            }
        }
        if(!isset($min) || $counter < $min) {
            $min = $counter;
            $column = $m;
        }

    }
    return $column;
}

function switchColumn(array &$arrA, $column){

    $tempArr = array();
    $lastColumn = count($arrA[0])-1;

    for($i = 0; $i < count($arrA); $i++) {
        for($n = 0; $n < count($arrA[$i]); $n++) {

            if($n > $column){
                $tempArr[$i][$n-1] = $arrA[$i][$n];
            }elseif($n == $column) {
                $tempArr[$i][$lastColumn] = $arrA[$i][$n];
            }else{
                $tempArr[$i][$n] = $arrA[$i][$n];
            }
        }
    }
    $arrA = $tempArr;
}

$db_array = array(
    array(13, 22, 81, 3, 4),
    array(4, -5, 1, 2, 2),
    array(2, 8, -9, 3, 11),
    array(22, 81, -91, 30, 31),
    array(24 ,18 , 49, 23, 221)
);

$col = getColumn($db_array);
switchColumn($db_array, $col);
print_r($db_array);


