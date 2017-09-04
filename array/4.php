<?php
function addPare(array &$arr, $pare){

    for($i = 0; $i < sizeof($arr); $i++ ){
        if($arr[$i] == $pare)
            return false;
    }

    $arr[] = $pare;
    return true;
}

$arrA = array(1, 1, 15, 77, 54, -1, 66, 2, 2);
$arrPare = array();
$i = 1;

while( $i < sizeof($arrA) ){//найти индекс положительного елемента
    if($arrA[$i] == $arrA[$i - 1]){
        addPare($arrPare, $arrA[$i]);
    }
    ++$i;
}

if( sizeof($arrPare) ) {
    echo "Найденны пары цифр - ";
    for ($i = 0; $i < sizeof($arrPare); $i++)
        echo "$arrPare[$i] ";
}else
    echo "Пар цифр не найдено";