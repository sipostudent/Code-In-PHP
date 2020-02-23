<?php

/*
    How to create abd use basic ARRAYS and array functions
    ======================================================
*/

/*
    How to loop through an array in PHP?
    ------------------------------------
*/

$names = array('Mary', 'James', "John", 'Sharon');

echo "<ol>";

foreach($names as $name){
	
	echo "<li>" . $name . "</li>";
	
}


echo "</ol>";