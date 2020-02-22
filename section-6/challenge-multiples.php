<?php

/*
    Section 6: Basic Loops
    ======================
*/

/*
    CHALLENGE: MULTIPLES
    --------------------

    Your challenge is to list all of the multiples of 6 which are less than or equal to 60.

    You must complete this task twice, once using a FOR loop and once using a WHILE loop.

    The multiples of 6 are 6, 12, 18, 24, 30, 36, 42, 48, 54, and 60
*/

// FOR loop solution
for ($i = 6; $i <= 60; $i+= 6) {
    echo $i . "<br>";
}

echo "<br>";

// WHILE loop solution
$j = 6;

while ($j <= 60) {
    echo $j . "<br>";
    $j+= 6;
}