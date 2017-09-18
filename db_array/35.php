<?php
function initMatrix(array $arr){

    $size = count($arr)/2;
    $matrix = array();
    $x = 0;

    for($i = 0; $i < $size; $i++){
        for($n = 0; $n < $size; $n++){
            if($n >= $i)
                $matrix[$i][$n] = $arr[$x++];
            else
                $matrix[$i][$n] = $matrix[$n][$i];
        }
    }
    return $matrix;
}

function multiplication(array $matrix, array $vector){

    $result = 0;

    for($n = 0; $n < count($matrix); $n++){
        for($m = 0; $m < count($vector); $m++){
            $result = $result + $matrix[$n][$m] * $vector[$m];
        }
    }
    return $result;
}

$matrix = initMatrix([13, 0, 2, 1, 8, -9]);
$vector = array(1, 2, 3);
echo multiplication($matrix, $vector);