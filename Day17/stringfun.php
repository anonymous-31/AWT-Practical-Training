<?php
$str="Apple's Lab";
$result=addslashes($str);
echo $str.'<br>';
echo $result;
echo '<br>'.'<br>'.'<br>';

$str1="Rakesh,Ramesh,Suresh,Mahesh";
$result1=explode(',',$str1);
echo '<pre>';
print_r($result1);
echo '<br>'.'<br>'.'<br>';

$str3="Hello World. It's beautiful day.";
print_r(explode(" ",$str3));
echo '<pre>';
echo '<br>'.'<br>'.'<br>';

$implode=implode(' ',$result1);
echo $implode;
echo '<br>'.'<br>'.'<br>';

echo strpos("Hellooo.. Hi Good Morning..!!","Hi");
echo '<br>'.'<br>'.'<br>';


echo strlen("Helloo..");
echo '<br>'.'<br>'.'<br>';

echo stripos("Hello Hi Good Morning!","Hi");
echo '<br>'.'<br>'.'<br>';

echo strrpos("Hello Hi Good Morning! Hi","Hi");
echo '<br>'.'<br>'.'<br>';

$htmlentity="&lt;H&gt;";
htmlentities($htmlentity);
echo $htmlentity;
echo '<br>'.'<br>'.'<br>';

html_entity_decode($htmlentity);
echo $htmlentity;
echo '<br>'.'<br>'.'<br>';

$text="THIS IS NICE TEXT";
echo lcfirst($text);
echo '<br>'.'<br>'.'<br>';

$text="this is nice text";
echo ucfirst($text);
echo '<br>'.'<br>'.'<br>';

$text="this is nice text";
echo ucwords($text);
echo '<br>'.'<br>'.'<br>';

$password="Abc@123";
echo md5($password);
echo '<br>'.'<br>'.'<br>';

$password="Abc@123";
echo sha1($password);
echo '<br>'.'<br>'.'<br>';

$text1="   Abc@123";
echo ltrim($text1);
echo '<br>'.'<br>'.'<br>';

$text1="Abc@123    ";
echo rtrim($text1);
echo '<br>'.'<br>'.'<br>';

$text1="   Abc@123     ";
echo trim($text1);
echo '<br>'.'<br>'.'<br>';

$rtext="Hellooo";
$text2="Good Morning";
echo str_replace("Good",$rtext,$text2);
echo '<br>'.'<br>'.'<br>';

$amount=1000;
$informat=number_format($amount,2);
echo $informat;
?>