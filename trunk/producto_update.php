<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<?php
    include 'config.php';

    // Connecting to Database
	mysql_connect ($host, $user, $password) or die ('Cant Connect to MySQL');
	// Selecting Database
	mysql_select_db($dbname) or die ('Cant select Database');
	
	$productos = $_POST['producto'];
	for($i = 0; $i < count($productos); $i++) {
		mysql_query("UPDATE `productos` SET `orden`=" . mysql_real_escape_string($i) . " WHERE `producto_id`='" . mysql_real_escape_string($productos[$i]) . "'") or die(mysql_error());
	}
?>

</head>
<body>
</body>
</html>
