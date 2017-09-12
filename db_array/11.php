<?php
function getMaxElement(array $arrA){

    if(!sizeof($arrA))
        die("Массив пуст");

    $MaxIndexArr = array(0, 0);
    $MaxIndexArr[2] = $arrA[0][0];

    for($i = 0; $i < count($arrA); $i++){
        for($n = 0; $n < count($arrA[$i]); $n++){
            if($arrA[$i][$n] > $MaxIndexArr[2]) {
                $MaxIndexArr[0] = $i;
                $MaxIndexArr[1] = $n;
                $MaxIndexArr[2] = $arrA[$i][$n];
            }
        }
    }
    return $MaxIndexArr;
}

function getIndexValLast(array $arr, $value){

    $tempArr = array();

    for($i = count($arr) - 1; $i > 0; $i--) {
        for ($n = count($arr[$i]) - 1; $n > 0; $n--) {
            if($arr[$i][$n] === $value){
                $tempArr[0] = $i;
                $tempArr[1] = $n;
                return $tempArr;
            }
        }
    }
    return $tempArr;
}

function deleteElements(array &$arr, array $start, array $finish){

    $tempArr = array();
    $line = 0;

    for($i = 0; $i < count($arr); $i++) {
        for ($n = 0; $n < count($arr[$i]); $n++) {
            if (($i <= $start[0] && $n < $start[1]) || ($i == $finish[0] && $n > $finish[1])
                || ($i > $finish[0]) ) {//проверка на диапозон
                $tempArr[$line][] = $arr[$i][$n];
            }else{
                if($arr[$i][$n] < 0 || ($arr[$i][$n] % 2) )
                    $tempArr[$line][] = $arr[$i][$n];
            }
        }
        if(isset($tempArr[$line]) )
            $line++;
    }
    $arr = $tempArr;
}

$db_array = array(
    array(13, 22, 81, 3, 4),
    array(4, -5, 1, 2, 2),
    array(2, 8, -9, 3, 12),
    array(22, 81, -91, 30, 32),
    array(24 ,18 , 49, 23, 22)
);
$MaxIndexArr = array();
$MaxIndexArr["first"] = getMaxElement($db_array);//вернуть позицию первого максимального элемента
$MaxIndexArr["last"] = getIndexValLast($db_array, $MaxIndexArr["first"][2]);//вернуть позицию последнего максимального элемента
deleteElements($db_array, $MaxIndexArr["first"], $MaxIndexArr["last"]);//очистить диапозон

print_r($db_array);