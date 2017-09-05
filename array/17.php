<?php
function checkElement(array $arr, $elem){

    for($i = 0; $i < count($arr); $i++){
        if($arr[$i] === $elem)
            return false;
    }
    return true;
}

$arrayNum = array(5, -33, 4, -22, 789, 789, 789, -57, 5);
$counter = 0;
$arrElem = array();


for($i = 0; $i < count($arrayNum); $i++){
    for($n = $i + 1; $n < count($arrayNum); $n++){

        if($arrayNum[$i] == $arrayNum[$n] && checkElement($arrElem, $arrayNum[$n]) ){
            array_push($arrElem, $arrayNum[$i]);
            $counter++;
            break;
        }
    }
}

echo "Количество элементов встречающихся более одного раза - $counter";