<?php
$result=  getFactorial(10);
function getFactorial($n){
    if($n%2!=0){
        echo "$n Odd Number";
    }else{
        echo "$n not a odd number";
    }
}
?>