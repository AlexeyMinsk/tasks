<?php
function getExp($num){

    $counter = 0;
    $i = 1;

    if($num < 10)
        return 0;

    while($num >= $i){

        $i *= 10;
        $counter++;
    }

    return $counter - 1;
}

function getNum($num, $pos){//получить число по порядковому номеру

    $pos = getExp($num) - $pos;
    return ( (int)($num / pow(10, $pos)) ) % 10;

}

$N = 5;//заданное число
$M = pow($N, 2);
$countN = getExp($N);
$countM = getExp($M);
$result = true;

for($i = 0; $i <= $countN; $i++){

    $num1 = getNum($N, $countN - $i );
    $num2 = getNum($M, $countM - $i );

    if( $num1 != $num2){
        $result = false;
        break;
    }
}

if($result)
    echo "Является";
else
    echo "Не является";



