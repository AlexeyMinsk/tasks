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

$arrA = array(1, 5, 6, 8);

insertElem($arrA, 7);
insertElem($arrA, 55);
insertElem($arrA, -7);
insertElem($arrA, 0);

print_r($arrA);


