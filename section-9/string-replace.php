<?php

// How to replace characters in a string
$string = "John|Sam|Billy|Karen|Ben|Jane|Bob";

$newString = str_replace('|', ', ', $string);

echo $newString;