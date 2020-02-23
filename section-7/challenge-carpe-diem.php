<?php

/*
    Section 7: PHP Internal (in-built) Functions
    ============================================
*/

/*  CHALLENGE: CARPE DIEM
    ---------------------

    This task has been designed to give you some experience using 
    the DATE() function. You are literally
    
    seizing the day date!
    
    All you need to do is produce suitable code to output the 
    date in the following formats.

*/

date_default_timezone_set('Europe/London');

//Will echo today's date, e.g, Sunday 23rd February 2020

echo date('l jS F Y');

echo "<br>";

//Today is Tuesday

echo "Today is " . date('l');

echo "<br>";

//Monday 06 April, 2015

echo date('l d F, Y');

echo "<br>";

//2015/04/06

echo date('Y/m/d');

echo "<br>";

//Monday 6th April 2015, 3:12 PM

echo date('l jS F Y, g:i A');

echo "<br>";

//leap year test

if (date('L') == 1){

echo date('Y') . " is a leap year";

} else {

echo date('Y') . " is not a leap year";

}
