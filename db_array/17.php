<?php
function getLineAlternating(array $db_arr){

    $counterMax = 0;
    $lineMax = 0;

    for($n = 0; $n < count($db_arr); $n++){
        $counter = 0;

        for($m = 0; $m < count($db_arr[$n]); $m++) {

            if ($db_arr[$n][$m] > 0)
                $positive = 1;
            elseif ($db_arr[$n][$m] == 0)
                $positive = 0;
            else
                $positive = -1;

            if($m == 0)
                $bef_positive = $positive;

            if ($bef_positive != $positive && $positive)
                $counter++;

            $bef_positive = $positive;
        }
        if($counterMax < $counter){
            $counterMax = $counter;
            $lineMax = $n;
        }
    }
    return $lineMax;
}

function changeLine(array &$db_arr, $line){

    $temp_arr = array();
    $temp_arr[] = $db_arr[$line];

    for($n = 0; $n < count($db_arr); $n++){
        if($n != $line)
            $temp_arr[] = $db_arr[$n];
    }
    $db_arr = $temp_arr;
}

$db_array = array(
    array(13, 22, 7, 3, 4),
    array(4, -5, 5, 2, 2),
    array(-2, 8, -7, 3, -12)
);

$ln = getLineAlternating($db_array);
changeLine($db_array, $ln);
print_r($db_array);