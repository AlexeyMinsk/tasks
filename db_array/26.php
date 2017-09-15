<?php
function sort_db_arr(array &$db_arr){

    $tempArr = array();
    $cor = 0;
    for($i = 0; $i < count($db_arr); $i++){
        if(count($db_arr[$i]) )
            $tempArr[$i - $cor] = $db_arr[$i];
        else
            $cor++;
    }
    for($i = count($tempArr); $i < count($db_arr); $i++)
        $tempArr[$i] = array();

    $db_arr = $tempArr;
}

$db_array = array(
    array(13, 22, 1, 3, 2),
    array(),
    array(2, 8, 9, 3, 12),
    array(32, 81, 91, 30, 32),
    array(24 ,18 , 49, 23, 22)
);
sort_db_arr($db_array);
print_r($db_array);