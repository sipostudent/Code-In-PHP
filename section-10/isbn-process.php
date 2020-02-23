<?php

/*
	CHALLENGE: ISBN CHECKER
	=======================
*/

/*
	TASK
	----

	Design a HTML form to allow a user to input a 10 digit ISBN.
	
	Send this data to a processing script and then check if it is a valid ISBN number.
	
	Output a valid or invalid message to the user.
	
	Sample valid ISBN: 1573980137
*/

//check if form submitted
if(isset($_POST['submit'])){
	
	//assign post variables
	$isbn = $_POST['isbn'];
	
	//total, incrementor
	$total = 0;
	$i = 1;
	
	//split the string
	$digits = str_split($isbn);
	
	//loop through array
	foreach($digits as $digit){
		//update total = digit * 1, 2, 3, etc
		$total += $digit * $i; 
		$i++;
	}
	
	//check if divisible by 11
	if($total % 11 == 0){
		echo "valid";
	} else {
		echo "invalid";
	}	
}



