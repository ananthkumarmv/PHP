<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>


<body>

	<?php

	echo "</br>5 + 2 = " . (5+2);
	echo "</br>5 - 2 = " . (string)(5-2);
	echo "</br>5 * 2 = " . (double)(5.6*2);
	echo "</br>5 / 2 = " . (integer)(5/2);
	echo "</br>5 % 2 = " . (5%2);

	echo "<br>";

	$randNum = 5;

	echo $randNum += 10;

	echo "</br></br>";

	echo "++randNum = " . ++$randNum . "</br>";
    echo "randNum++ = " . $randNum++;
    echo "</br></br>";


    $refToNum = &$randNum;

    $randNum = 100;

    echo '$refToNum = ' . $refToNum;
    echo "</br></br>";

	?>

</body>
</html>
