<?php
function testPrimal($N){

    $fl = true;

    for($n = 2; $n <= $N / 2; $n++) {

        if(!($N % $n) ){
            $fl = false;
            break;
        }
    }
    return $fl;
}

function deleteColumn(array &$arrA){

    $tempArr = array();
    $size = count($arrA[0]);

    for($i = 0; $i < $size; $i++) {

        $flag = true;
        $counter = 0;

        for($n = 0; $n < count($arrA); $n++) {
            if(!testPrimal($arrA[$n][$i]) ){
                $flag = false;
                break;
            }
        }
        if($flag){
            addColumn($arrA, $tempArr, $i);
        }
    }
    $arrA = $tempArr;
}

function addColumn($from, &$to, $col_from){

    if(!count($to))
        $col_to = 0;
    else
        $col_to = count($to[0]);

    for($n = 0; $n < count($from); $n++)
        $to[$n][$col_to] = $from[$n][$col_from];
}

$db_array = array(
    array(13, 22, 7, 3, 4),
    array(4, -5, 5, 2, 2),
    array(2, 8, -7, 3, 12)
);

deleteColumn($db_array);
print_r($db_array);

