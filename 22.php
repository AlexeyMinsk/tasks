<?php

function checkPrimal($N){

    $fl = true;

    if($N == 2) return $fl;

    for($n = 2; $n <= $N / 2; $n++) {

        $res = $N / $n;

        if( gettype($res) == "integer"){
            $fl = false;
            break;
        }
    }
    return $fl;
}

function parseNum($N){

    if( checkPrimal($N) ) {
        echo $N;
        return true;
    }



    for($i = (int)($N/2); $i >= 2; $i--){

        $res = $N / $i;

        if(gettype($res) == "integer") {

            if( checkPrimal($i) ){

                echo $i, " * ";
                parseNum($res);
                break;
            }
        }
    }
}

$N = 77;//заданное число

parseNum($N);

