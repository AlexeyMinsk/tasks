<?php
function insertElem(array &$arr, $elem){

    $fl = true;
    $arrB = array();
    $size = count($arr);

    for($i = 0; $i < $size; $i++){

        if($arr[$i] > $elem && $fl){
            $arrB[] = $elem;
            $fl = false;
        }
        $arrB[] = $arr[$i];

        if($fl && $size == ($i+1) )
            $arrB[] = $elem;
    }
    $arr = $arrB;
}

$arrA = array(1,2,5,6,7);
$arrB = array(0,1,2,3,4,5);
$arrC = $arrA;

for($i = 0; $i < count($arrB); $i++){
    insertElem($arrC, $arrB[$i]);
}

print_r($arrC);