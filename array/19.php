<?php
$arrayNum = array(5, -33, 4, -22, 12,  -57, 5);
$p = 2;

for($i = count($arrayNum) - 1; $i > 0; $i--){

   if($arrayNum[$i] > 0 && !($arrayNum[$i] % $p) ){
       $index = $i;
       break;
   }
}
if(!isset($index))
    die("В массиве нет положительных цифр кратный $p");

for($i = $index + 1; $i < count($arrayNum); $i++){

    if($i == count($arrayNum) - 1) {
        $arrayNum[$i - 1] = $arrayNum[$i];
        $arrayNum[$i] = $index;
    }
    else
        $arrayNum[$i-1] = $arrayNum[$i];



}
print_r($arrayNum);