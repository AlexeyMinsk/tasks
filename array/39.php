<?php
function sortArr(array &$arr){

    $priority = array();


    for($m = 0; $m < 20; $m++){//заполнение массива приоритета

        $priority[$m] = 0;

        for($w = 0; $w < count($arr); $w++){

            if($m+1 == $arr[$w])
                $priority[$m]++;
        }
    }

    for($i = 0; $i < count($arr); $i++){

        $value = $arr[$i];
        $index = $i;

        for($n = $i+1; $n < count($arr); $n++){

            if($priority[$value-1] < $priority[$arr[$n]-1] ||
                ($priority[$value-1] == $priority[$arr[$n]-1] &&
                $value < $arr[$n]) )
                /*
                 в случае одинаковых приоритетов, чтобы цифры сортировались
                по убыванию
                */
            {
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

$arrA = array(20,20,19,17,15,14,17,1,5,4,4,7,9,9,9,9);
sortArr($arrA);
print_r($arrA);
