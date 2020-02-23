<?php

// Double versus single quotes in PHP
$name = "Tom";
$age = 21;

echo "Hello, " . $name . " your age is " . $age . " years old.";
	
echo "<br>";

echo "Hello, $name your age is $age years old.";

echo '<br>';

echo 'Hello, ' . $name . ' your age is ' . $age . ' years old.';

echo '<br>';

echo 'Hello, $name your age is $age years old.';