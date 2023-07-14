<?php
echo "The Original Array is:<br>";
$a=array("abc"=>10,"xyz"=>30,"efg"=>20);
echo "<pre>";
print_r($a);
echo "After Sorting:<br>";
ksort($a);
echo "<pre>";
print_r($a);

?>