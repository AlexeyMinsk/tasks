<?php
$arrA = array(1, 55, 15, 77, 54, -1, 66);

if(sizeof($arrA) < 2)
    die("Массив содержит менее 2 элементов");

$i = 0;
$indexMax = 0;
$indexMin = 0;
$min = $arrA[0];
$max = $arrA[0];

while( $i < sizeof($arrA) ){

    if( $arrA[$i] < $min){
        $indexMin = $i;
        $min = $arrA[$i];
    }
    if( $arrA[$i] > $max){
        $indexMax = $i;
        $max = $arrA[$i];
    }
    ++$i;
}

$temp = $arrA[$indexMax];
$arrA[$indexMax] = $arrA[$indexMin];
$arrA[$indexMin] = $temp;

print_r($arrA);

