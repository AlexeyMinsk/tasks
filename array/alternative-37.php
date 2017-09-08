<?php
function sortArr(array &$arr){

    for($i = 0; $i < count($arr); $i++){

        $value = $arr[$i];
        $index = $i;

        for($n = $i+1; $n < count($arr); $n++){

            if( ($value > $arr[$n] && $value) || !$arr[$n] ){
                $value = $arr[$n];
                $index = $n;
            }
        }
        switchElem($arr, $i, $index);
    }
}

function switchElem(array &$arr, $elem1, $elem2){

    if($elem1 == $elem2)    return;
    $temp = $arr[$elem1];
    $arr[$elem1] = $arr[$elem2];
    $arr[$elem2] = $temp;
}

$arrA = array(0, 55, 0, 77, -2, -9, 0, 6, 0);

sortArr($arrA);?>

<pre id='arr-a' style="display:none"><?php
    print_r($arrA);
    ?></pre>

<script>
    let arrA = document.getElementById('arr-a');
    alert(arrA.textContent);
</script>
