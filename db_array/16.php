<?php
function findLastNull(array $db_arr){

    $index_arr = array(null, null);

    for($i = count($db_arr)-1; $i > 0; $i--){
        for($n = count($db_arr[$i])-1; $n > 0; $n--){
            if(!$db_arr[$i][$n]) {
                $index_arr = array($i, $n);
                return $index_arr;
            }
        }
    }
    return $index_arr;
}

$db_array = array(
    array(13, 22, 7, 3, 4),
    array(4, -5, 5, 0, 2),
    array(2, 8, -7, 3, 12)
);

$single_arr = array(33, 22, 10);

$lastNull_arr = findLastNull($db_array);
$tempArr = array();
$flag = true;

for($i = 0; $i < count($db_array); $i++) {
    for ($n = 0; $n < count($db_array[$i]); $n++) {
        if($i == $lastNull_arr[0] && $n == $lastNull_arr[1]) {
            $tempArr[$i][] = $single_arr;
            $flag = false;
        }
        $tempArr[$i][] = $db_array[$i][$n];
    }
    if($flag)
        $tempArr[$i][] = $single_arr;
}
$db_array = $tempArr;
print_r($db_array);
