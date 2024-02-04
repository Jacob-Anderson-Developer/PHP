<?php
echo "*************** For Loop*************</br>";

/* For loop example */
$j = 0;
for ($j = 0; $j < 11; $j++) {
    echo "The value of J is $j ---- </br>";
}

echo "*************** While Loop*************</br>";

/* While loop example */
$j = 0;
while ($j < 11) {
    echo "The number is: $j <br>";
    $j++;
}

echo "*************** Do/While Loop*************</br>";

/* Do while loop example */
$j = 0;
do {
    echo "The number is: $j <br>";
    $j++;
} while ($j < 11);

echo "*************** For Each Loop*************</br>";

$my_colors = array("Blue", "Orange", "Pink", "Red", "Black", "Purple");

/* For Each loop */
foreach ($my_colors as $color) {
    echo "My color is $color </br>";
}

echo "*************** Break/Continue Loop*************</br>";

/* Break Continue example */
$j = 0;
for ($j = 0; $j < 11; $j++) {
    if ($j == 11) {
        break;
    }
    echo "The number is: $j <br>";
}
?>
