<?php

/*
    How to create and use basic ARRAYS and array functions
    ======================================================
*/

/*
    How to split a string and place into an array in PHP
    ----------------------------------------------------
*/

$word = "Christmas";

$letters = str_split($word, 3);

echo "<pre>";
print_r($letters);