<?php
function testNegative(array $arr){

    for($i = 0; $i < count($arr); $i++)
        if($arr[$i] < 0)
            return false;

    return true;
}

function multiplication(array $db_array, array $vector){

    $resultArr = array();


    for($n = 0; $n < count($db_array); $n++){
        $resultArr[$n] = 0;
        for($m = 0; $m < count($vector); $m++){
            $resultArr[$n] = $resultArr[$n] + $vector[$m] * $db_array[$n][$m];
        }
    }


    return $resultArr;
}

$db_array = array(
    array(13, 22, 1, 3, 4),
    array(4,-5, 1, 2, 2),
    array(2,8,-9, 3, 12)
);
$vector = array();

for($i = 0; $i < count($db_array); $i++){

    if(testNegative($db_array[$i]) ){
        $vector = $db_array[$i];
        $res = multiplication($db_array, $vector);
        break;
    }
}

print_r($res);