<?php
$arrA = array(1, 55, 15, 77, 54);
$arrB = array();

for($i = 0; $i < sizeof($arrA); $i++){

    $sum = 0;

    for($n = 0; $n <= $i; $n++)
        $sum += $arrA[$n];

    $arrB[] = $sum / ($i + 1);
}
print_r($arrB);

