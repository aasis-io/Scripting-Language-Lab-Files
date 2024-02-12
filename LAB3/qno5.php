<?php

$principle = 10000;
$rate = 10;
$timeY = 3;

function simpleInterest($principle, $rate, $timeY)
{
    return ($principle * $rate * $timeY)/100;
}

echo "Simple Interest is " . simpleInterest($principle, $rate, $timeY);


?>

<!-- 5. write a program calculate interest using function -->