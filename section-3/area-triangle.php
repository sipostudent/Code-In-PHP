<?php

// Calculate the area of a triangle

/*
To calculate the area of a triangle, multiply the height by the width 
(this is also known as the 'base') then divide by 2. Find the area of 
a triangle where height = 5 cm and width = 8 cm. The area is 20cm². 
A triangle is always half the area of a rectangle with the same height and width.
*/

$baseOne = 12;

$heightOne = 3;

$triangleAnswerOne = ($heightOne * $baseOne) / 2;

echo $triangleAnswerOne;

echo "<br>";

// Alternative option

$baseTwo = 12;

$heightTwo = 3;

$triangleAnswerTwo = ($baseTwo / 2) * $heightTwo;

echo $triangleAnswerTwo;

?>