<?php
$from = 1;
$to = 50;
for($i=$from; $i<= $to; $i++){
    $result=  getFactorial($i);
}

function getFactorial($n){
    if($n%2!=0){
        echo "$n Odd Number<br/>";
    }else{
        echo "$n not a odd number<br/>";
    }
}
?>