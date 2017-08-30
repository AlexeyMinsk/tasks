<?php

function printBinary($N, $str = ''){

    if(!$N) {
        echo '0';
        return 1;
    }
    if( !($N%2) ){
        $str = '0' . $str;
        printBinary($N / 2, $str);
    }else{
        $str = '1' . $str;
        if($N - 1 > 0)
            printBinary(($N - 1) / 2, $str);
        else
            echo $str  . '|';
    }
}

function printHex($N, $str = ''){

    $x = $N % 16;
    $tempChar = '';

    switch($x){
            case 10:
                $tempChar = 'A';
                break;
            case 11:
                $tempChar = 'B';
                break;
            case 12:
                $tempChar = 'C';
                break;
            case 13:
                $tempChar = 'D';
                break;
            case 14:
                $tempChar = 'E';
                break;
            case 15:
                $tempChar = 'F';
                break;
            default:
                $tempChar = (string)$x;
        }

    if($N > 15) {
        $str = $tempChar . $str;
        printHex($N / 16, $str);
    }
    else {
        $str = $tempChar . $str;
        echo $str;
    }

}

$N = 30;//заданное число
printBinary($N);
printHex($N);

