<?php
function sortArr(array &$arr, $sort = true){

    for($i = 0; $i < count($arr); $i++){

        $priority = array(0,2,1);
        $value = $arr[$i];
        $index = $i;

        for($n = $i+1; $n < count($arr); $n++){

            if($priority[$value] > $priority[$arr[$n]]){
                $value = $arr[$n];
                $index = $n;
            }
        }
        switchElem($arr, $i, $index);
    }
}

function switchElem(array &$arr, $elem1, $elem2){

    if($elem1 == $elem2)    return;
    $temp = $arr[$elem1];
    $arr[$elem1] = $arr[$elem2];
    $arr[$elem2] = $temp;
}

$arrA = array(0,1,2,0,1,1,2,0,0,1,2);

sortArr($arrA);
print_r($arrA);
