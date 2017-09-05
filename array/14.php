<?php
$arrayNum = array(5, -33, 4, -22, 789, -22, 436, -5745, -32);
$arrayPositive =array();
$arrayNegative =array();
$arrayEven =array();
$arrayOdd =array();

for($i = 0; $i < count($arrayNum); $i++){

    if($arrayNum[$i] < 0)
        array_push($arrayNegative, $arrayNum[$i]);
    elseif($arrayNum[$i] > 0)
        array_push($arrayPositive, $arrayNum[$i]);

    if($arrayNum[$i] % 2)
        array_push($arrayEven, $arrayNum[$i]);
    elseif( $arrayNum[$i] && !($arrayNum[$i] % 2) )
        array_push($arrayOdd, $arrayNum[$i]);
}

print_r($arrayPositive);
print_r($arrayNegative);
print_r($arrayEven);
print_r($arrayOdd);
