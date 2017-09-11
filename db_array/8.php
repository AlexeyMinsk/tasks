<?php
function switchMaxMin(array &$arrA){

    if(sizeof($arrA) < 2)
        die("Массив содержит менее 2 элементов");

    $indexMax = 0;
    $indexMin = 0;
    $min = $arrA[0];
    $max = $arrA[0];

    for($i = 0; $i < sizeof($arrA); $i++ ){

        if( $arrA[$i] < $min){
            $indexMin = $i;
            $min = $arrA[$i];
        }
        if( $arrA[$i] > $max){
            $indexMax = $i;
            $max = $arrA[$i];
        }
    }

    $temp = $arrA[$indexMax];
    $arrA[$indexMax] = $arrA[$indexMin];
    $arrA[$indexMin] = $temp;
}

$db_array = array(
    array(13, 22, 1, 3, 4),
    array(4, -5, 1, 2, 2),
    array(2, 8, -9, 3, 12),
    array(22, 81, -91, 30, 32),
    array(24 ,18 , 49, 23, 22)
);

for($i = 0; $i < sizeof($db_array); $i++ )
    switchMaxMin($db_array[$i]);

print_r($db_array);