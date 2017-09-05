<?php
function checkElement(array $arr, $elem, $exception = false){

    for($i = 0; $i < count($arr); $i++){
        if($arr[$i] === $elem && $exception !== $i)
            return false;
    }
    return true;
}

$arrayNum = array(5, -33, 4, -22, 789, 789, 789, -57, 5);
$counter = 0;
$arrElem = array();

for($i = 0; $i < count($arrayNum); $i++){

    if(!checkElement($arrayNum, $arrayNum[$i], $i) && checkElement($arrElem, $arrayNum[$i]) )
        $arrElem[] = $arrayNum[$i];
}
print_r($arrElem);