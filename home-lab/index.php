<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="mobile.css">
	<title></title>
</head>
<body>
	<div id="hl01" class="header-x">
		<input type="text" placeholder="Search..">
	</div>
	<div id="hl02" class="body-x"></div>
	<?php
    // Get the IP address
    $ip = $_SERVER["REMOTE_ADDR"];
    echo "<p>Your IP address is: $ip</p>";
    ?>
</body>
</html>