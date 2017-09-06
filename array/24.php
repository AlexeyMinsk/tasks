<?php
$arrayNum = array(0, 0, 0, -22, 0, 0, 0, 0, 0, 436, -57, -32);
$arrResult = array();
$size = count($arrayNum) - 1;
$start = false;

for( $i = 0; $i <= $size; $i++ ){

    if(!$start && $arrayNum[$i] === 0) {
        $startIdx = $i;
        $start = true;
    }
    elseif($start && ($arrayNum[$i] != 0 || $i == $size) ){

        if(isset($arrResult["start"]) ) {
            if ($i - $startIdx > $arrResult["finish"] - $arrResult["start"]) {
                $arrResult["start"] = $startIdx;
                $arrResult['finish'] = $i;
            }
        }else{
            $arrResult['start'] = $startIdx;
            $arrResult['finish'] = $i-1;
        }

        $start = false;
    }

}
echo "Самый длинный участок из нулей начинается с индекса ", $arrResult['start'],
" и заканчивается индексом - ", $arrResult['finish'];