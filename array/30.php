<?php
function compute($x, array $numArr,array $arrK){

    return $numArr[0] * pow($x, $arrK[0]) + $numArr[1] * pow($x, $arrK[1]) + $numArr[2] * pow($x, $arrK[2]);
}

function computeDerivative($x, array $arrN, array $arrK){

    $tempArrK = array();
    $tempArrNum = array();
    for($i = 0; $i < count($arrK); $i++){

        $tempArrK[] = $arrK[$i] - 1;
        $tempArrNum[] = $arrN[$i] * $arrK[$i];
    }

    return compute($x, $tempArrNum, $tempArrK);
}

$arrNum = array(5 ,9, 7);
$arrK = array(3 ,2, 1);
$x = 3;

echo compute($x, $arrNum, $arrK), '|',
computeDerivative($x, $arrNum, $arrK);