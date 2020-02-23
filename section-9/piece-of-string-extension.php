<!DOCTYPE html>
<html>
	<head>
		<title>Calculating the length of a string</title>
	</head>
	<body>
		<form action="" method="post">
			<input type="text" name="string">
			<input type="radio" name="spaces" value="yes">Include spaces
			<input type="radio" name="spaces" value="no">Do not include spaces
			<input type="submit" name="submit">
		</form>
	</body>
</html>

<?php

	if(isset($_POST['submit'])){

		$string = $_POST['string'];
		$spaces = $_POST['spaces'];

		if($spaces == 'no'){
			$string = str_replace(" ", "", $string);
		}
		$length = strlen($string);

		echo "The string is " . $length . " characters long.";


	}

?>