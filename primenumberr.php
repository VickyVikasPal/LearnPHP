<?php
$n =12;
$res ='prime';
for($i=2; $i<= ($n/2); $i++ ){
    if($n%$i==0){
        $res = "not prime";
        break;
    }
}
echo $res;
?>