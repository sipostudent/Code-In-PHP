<?php

/*
    Section 6: Basic Loops
    ======================
*/

/*
    CHALLENGE: FIZZ BUZZ
    --------------------

    Your challenge is to loop through the numbers 1 to 100.
    
    If a number is a multiple of 3 then output FIZZ instead of the number.
    
    If a number is a multiple of 5 then output BUZZ instead of the number.
    
    If a number is a multiple of both 3 and 5 then output FIZZ BUZZ instead of the number.
    
    Your output will look something like this:
*/

for ($i = 1;$i <= 100;$i++)
{

    if ($i % 3 == 0 && $i % 5 == 0)
    {

        echo 'FIZZBUZZ';

    }
    elseif ($i % 3 == 0)
    {

        echo 'FIZZ';

    }
    elseif ($i % 5 == 0)
    {

        echo 'BUZZ';

    }
    else
    {

        echo $i;

    }

    echo '<br>';

}