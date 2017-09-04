<?php
$arrA = array(1, 55, 15, 77, 54, -1, 66);

$i = 0;
$indexMax = 0;

while( $i < sizeof($arrA) ) {
    if( !($arrA[$i] % 2) ) {
        $max = $arrA[$i];
        break;
    }
    $i++;
}

if(!isset($max) )
    die("Чётный цифр в массиве нет");

$i = 0;

while( $i < sizeof($arrA) ){

    if( $arrA[$i] > $max && !($arrA[$i] % 2) ){
        $indexMax = $i;
        $max = $arrA[$i];
    }
    ++$i;
}

$arrA[$indexMax] = $indexMax;

print_r($arrA);

