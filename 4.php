<?php
function order($num, $ord = true){
    //$ord - порядок, true - на возрастание
    $flag = true;
    $preResidue = $ord? 9 : 0;

    while($num > 9){

        $residue = $num % 10;
        if($ord) {
            if ($preResidue <= $residue) {
                $flag = false;
                break;
            }
        }else{
            if ($preResidue >= $residue) {
                $flag = false;
                break;
            }
        }
        $preResidue = $residue;

        $num = ($num - $residue) / 10;
    }
    if($ord) {
        if ($flag && $preResidue <= $num)
            $flag = false;
    }else{
        if ($flag && $preResidue >= $num)
            $flag = false;
    }
    return $flag;
}

for($i = 1001; $i < 10000;$i++){

    if( !($i%2) ){
        if( order($i) ){
            echo '|->';
            echo $i;
        }elseif( order($i, false) ){
            echo '|<-';
            echo $i;
        }
    }
}