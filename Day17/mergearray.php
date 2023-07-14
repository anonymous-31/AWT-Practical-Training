<?php
$a=array(1,2,3,4,5);
$b=array(6,7,8,9,10);
echo "First Array:";
print_r($a);
echo "<br>Seond Array:";
print_r($b);
$ans=array_merge($a,$b);
echo "<br><br>After Merging:";
echo "<pre>";
print_r($ans);
?>