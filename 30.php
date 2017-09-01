<?php
function testPrimal($N){

    $fl = true;

    for($n = 2; $n <= $N / 2; $n++) {

        $res = $N / $n;

        if( gettype($res) == "integer"){
            $fl = false;
            break;
        }
    }

    return $fl;
}

function testTwins($num1, $num2){

    if( !testPrimal($num1) )
        echo "Число $num1 не является простым |";
    elseif( !testPrimal($num2) )
        echo "Число $num2 не является простыми |";
    else{
        if( abs($num1 - $num2) == 2)
            echo "Числа $num1 и $num2 являются простыми числами-близнецами |";
        else
            echo "Числа $num1 и $num2 не являются числами-близнецами |";
    }
}

$n1 = 5;
$n2 = 7;
$n3 = 9;
$n4 = 11;

testTwins($n1, $n2);
testTwins($n1, $n3);
testTwins($n1, $n4);
testTwins($n3, $n4);