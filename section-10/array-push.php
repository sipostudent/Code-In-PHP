<?php

// How to add elements to an exisiting array in PHP
$cities = array ('London', 'Paris');

echo "<pre>";
print_r($cities);

array_push($cities, 'New York', 'Berlin');

print_r($cities);

array_unshift($cities, 'Amsterdam', 'Dublin');

print_r($cities);