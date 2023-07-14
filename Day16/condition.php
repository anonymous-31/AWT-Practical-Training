<?php
$x=0;
while($x < 10){
    if($x == 4){
        break;
    }
    echo "The Number is:$x <br>";
    $x++;
}

$y=0;
while($y < 10){
    if($y==4){
        $y++;
        continue;
    }
    echo "The number is:$y<br>";
    $y++;
}
?>