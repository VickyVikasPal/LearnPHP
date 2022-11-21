<?php
$result=  getFactorial(5);
function getFactorial($n){
    $fact = 1;
    for($i=$n; $i > 0; $i-- ){
        $fact = $i*$fact;
    }
    print_r($fact);die;
}
?>