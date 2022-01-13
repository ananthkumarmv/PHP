<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>


<body>

	<?php

	$usersName = $_POST['username'];
	$streetAddress = $_POST['streetaddress'];
	$cityAddress = $_POST['cityaddress'];

	echo $usersName . "</br>";
	echo $streetAddress . "</br>";
	echo $cityAddress . "</br>";

	$str = <<<EOD
	The customers name is
	$usersName and they
	live at $streetAddress
	in $cityAddress</br>

	EOD;

	echo $str;

	



	?>

</body>
</html>