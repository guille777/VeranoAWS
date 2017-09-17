<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IP</title>
</head>
<body>
	<?php
	//superglobal:
	$ip = $_SERVER['REMOTE_ADDR'];
	echo $ip;
	echo "<br>";
	$tabla=["uno"=>"verde"];
	foreach ($tabla as $key => $value) {
		echo $key.$value;
	}
	echo "<br><a href='index.php'>Home</a>";
	?>
</body>
</html>
