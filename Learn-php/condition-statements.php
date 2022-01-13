<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>


<body>

	<?php


	$randNum = 5;

	if (5 == 10) {
		// code...

		echo '5 = 10';
	}
	else {
		echo '5 != 10';
	}
	echo "</br></br>";


	$numOfOranges = 4;
	$numOfBananas =36;

	if(($numOfOranges > 25 ) && ($numOfBananas > 30)){

		echo '25% Discount';

	}

	elseif (($numOfOranges > 30 ) || ($numOfBananas > 35)){

		echo '15% Discount';

	}

	elseif (!(($numOfOranges < 5 )) || (!($numOfBananas < 5))) {

		echo '5% Discount';

	}
	else {
		echo 'No Discount for you';
	}
	
	?>

</body>
</html>
