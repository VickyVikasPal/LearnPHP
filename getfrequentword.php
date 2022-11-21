<?php
$text = "Hello World this is test test";
$wcount = str_word_count($text,1);
print_r(array_count_values($wcount));die;
// while($wcount!=0){

//     $wcount--;
// }
print_r($wcount);die;
?>