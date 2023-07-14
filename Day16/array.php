<?php
$array1=array("key1"=>50,"key2"=>40,"key3"=>30);
var_dump($array1);
echo "<br>";

$array2=array(0.50,0.40,0.30);
print_r($array2);
echo "<br>";


$array3=["d","z","d"];
print_r($array3);
echo "<br>";


//Multidimensional array
$array4=array(
  "first" => array("BMW","VOLVO","PORSCHE"),
   "second"=> array("mango","banana","pineapple")
);
print_r($array4);

$array5=array(
    "first"=>array("first_first"=>20),
    "second"=>array("second first"=>20,
        "second_second"=>array(
            "second_second_first"=>"sub sub array")
        )
        );
        echo "<pre>";
        print_r($array5);

        //sorting

        rsort($array1);
        print_r($array1);

        ksort($array2);
        print_r($array2);

        $sort = sort($array1);
        print_r($sort);

        $asort = asort($array1);
        print_r($sort);
?>