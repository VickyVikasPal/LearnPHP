<?php

$from = 10;
$to = 500;
$pnum = '';
for($i=$from; $i<=$to; $i++){
   $result=  checkPrimeNumber($i);
   if($result=='prime'){
    $pnum .= $i.',';
   }
}
echo $pnum;

function checkPrimeNumber($n){
    $n =$n;
    $res ='prime';
    for($i=2; $i<= ($n/2); $i++ ){
        if($n%$i==0){
            $res = "not prime";
            break;
        }
    }
    return $res;
}
?>