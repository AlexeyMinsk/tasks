<?php
function testPrimeNumber($N){

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

$flag = true;
$num = 2;
$counter = 0;

while($flag){

    if( testPrimeNumber($num) )
        if( testPrimeNumber($num + 2) ){
            echo "[",  $num, " + ", $num + 2, "]";
            $counter++;
        }
    $num++;
    if($counter == 10)
        $flag = false;
}