<?php

// Example array
$numbers = [1, 2, 3, 4, 5];

// Example for loop
echo "For Loop: ";
for ($i = 0; $i < count($numbers); $i++) {
    echo $numbers[$i] . " ";
}
echo "<br>";

// Example while loop
echo "While Loop: ";
$j = 0;
while ($j < count($numbers)) {
    echo $numbers[$j] . " ";
    $j++;
}
echo "<br>";

// Example foreach loop
echo "Foreach Loop: ";
foreach ($numbers as $number) {
    echo $number . " ";
}
echo "<br>";

?>


<!-- 3. write a program using different PHP loops -->