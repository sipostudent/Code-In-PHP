<?php

/*
    Section 7: PHP Internal (in-built) Functions
    ============================================
*/

/*
    CHALLENGE: WHO ATE ALL THE PI?
    ------------------------------

    This challenge tests your ability to research the ROUND() function and use it in context.
    Your task is to calculate the area of a circle using the PI() function and a radius of 5.
    For those who do not know, or who may have long forgotten, the area of a circle is 
    given by the formula:
        
        Area of circle = πr2
        In other words, pi multiplied by the radius squared

    The only difference is that I want you to give the answer to 2 decimal places. 
    To do this you will need to use the ROUND() function.
*/

$radius = 5;

$area = pi() * pow($radius, 2);

$roundedArea = round($area, 2);

echo "The  area is " . $roundedArea;
