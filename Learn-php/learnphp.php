<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Information Gathered</title>
</head>


<body>

	<?php 

	echo "<p>Data Processed</p>";

	date_default_timezone_set('UTC');

	/* Echos the date
				h: 12 hr format
				H: 24 hr format
				i: minutes
				s: seconds
				u: microseconds
				a: lowercase am or pm
				l: full text for the day
				F: full text for the month
				j: day of the month
				S: suffix for the day st, nd, rd, etc..
				Y: 4 digit y
	*/

	echo date('h:i:s:u a, l F jS Y e');

	?>




</body>
</html>