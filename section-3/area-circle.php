<?php

// Calculate the area of a circle

/*
To find the area of a circle with the radius, square the radius, 
or multiply it by itself. Then, multiply the squared radius by pi, 
or 3.14, to get the area. To find the area with the diameter, simply 
divide the diameter by 2, plug it into the radius formula, 
and solve as before.
*/

$radius = 9;

$pi = 3.14;

$answer = ($radius * $radius) * $pi;

echo $answer;