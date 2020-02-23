<?php

/*
    Section 7: PHP Internal (in-built) Functions
    ============================================
*/

/*  CHALLENGE: SANTA CLAUS IS COMING TO TOWN
    ----------------------------------------

    As Christmas approaches you will see many sites, especially shopping sites, 
    display the number of daysToChristmas until Christmas.

    Your task is to write a script to display the number of daysToChristmas until Christmas.

    There are many ways this can be achieved.

    I suggest you look at the time() function and strtotime() as demonstrated in 
    the previous video lesson.
*/

date_default_timezone_set('Europe/London');

$christmasDay = strtotime('25 December 2020');

$daysToChristmas = ceil($christmasDay - time()) / 60 / 60 / 24;

echo "There  are " . ($daysToChristmas) . " days until Christmas.";

?>