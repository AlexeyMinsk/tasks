<?php
$arrayNum = array(5, -33, 4, -22, 789, 789, 789, -57, 5);
$arrElem = array();


for($i = 0; $i < count($arrayNum); $i++){
    $counter = 1;
    if(!isset($arrElem["$arrayNum[$i]"])) {
        for ($n = $i + 1; $n < count($arrayNum); $n++) {

            if ($arrayNum[$i] == $arrayNum[$n])
                $counter++;

            $arrElem["$arrayNum[$i]"] = $counter;
        }
    }
}

print_r($arrElem);