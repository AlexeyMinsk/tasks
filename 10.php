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

function testPalindrom($num){

    $sz = getExp($num);

    if(!$sz)
        return false;

    for($i = 0; $i < $sz / 2; $i++){

        $num1 = getNum($num, $i);
        $num2 = getNum($num, $sz - $i);

        if($num1 != $num2){
            return false;
        }
    }

    return true;
}
$N = 1000;//искать до

for($i = 10; $i < $N; $i++){
    if( testPalindrom($i) ){
        echo $i;
        echo '|';
    }
}


