<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<?php
    include 'config.php';

    // Connecting to Database
	mysql_connect ($host, $user, $password) or die ('Cant Connect to MySQL');
	// Selecting Database
	mysql_select_db($dbname) or die ('Cant select Database');
	
	$producto_id = $_POST['producto_id'];
	if($_POST['producto_id']!="") {
		mysql_query("DELETE FROM `productos` WHERE `producto_id`='" . $producto_id . "'") or die(mysql_error());
	}
?>

</head>
<body>
</body>
</html>
