<?php
$a=array(1,3,5,7,9,11);
echo "<pre>";
print_r($a);
$sum=0;
foreach($a as $value){
    $sum=$sum+$value;
}
echo "sum of the given sequence is ".$sum;
echo "<br>average of the given sequence is ".($sum/6);
?>