<?php
function deleteNullLine(array &$arr){

    $tempArr = array();
    $line = 0;

    for($i = 0; $i < count($arr); $i++) {
        if(count($arr[$i]) ){
            $tempArr[$line] = $arr[$i];
            $line++;
        }
    }
    $arr = $tempArr;
}

$db_array = array(
    array(13, 22, 81, 3, 4),
    array(4, -5, 1, 2, 2),
    array(),
    array(),
    array(24 ,18 , 49, 23, 222)
);

deleteNullLine($db_array);
print_r($db_array);