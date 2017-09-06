<?php
function compute($x, array $numArr,array $arrK){

    $terms = array();

    for($i = 0; $i < count($arrK); $i++)
        if($arrK[$i])
            $terms[$i] = $numArr[$i] * pow($x, $arrK[$i]);

    echo sumArray($terms), '|';

}

function computeDerivative($x, array $arrN, array $arrK){

        $tempArrK = array();
        $tempArrNum = array();

        for ($i = 0; $i < count($arrK); $i++) {

            if($arrK[$i])
                $tempArrK[] = $arrK[$i] - 1;
            else
                $tempArrK[] = 0;

            $tempArrNum[] = $arrN[$i] * $arrK[$i];
        }

        compute($x, $tempArrNum, $tempArrK);

        if(sumArray($tempArrK) > 1 )
            computeDerivative($x, $tempArrNum, $tempArrK);
}

function sumArray($arr){

    $sum = 0;
    for ($i = 0; $i < count($arr); $i++)
        $sum += $arr[$i];

    return $sum;
}

$arrNum = array(5 ,9, 7);//30,18
$arrK = array(3 ,2, 1);//1,0,0
$x = 3;

compute($x, $arrNum, $arrK);
computeDerivative($x, $arrNum, $arrK);