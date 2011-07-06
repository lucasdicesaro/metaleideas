<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
    include 'config.php';

    // Connecting to Database
	mysql_connect ($host, $user, $password) or die ('Cant Connect to MySQL');
	// Selecting Database
	mysql_select_db($dbname) or die ('Cant select Database');
	
	$categoria = $_POST['categoria'];
	for($i = 0; $i < count($categoria); $i++) {
		mysql_query("UPDATE `categorias` SET `orden`=" . mysql_real_escape_string($i) . " WHERE `categoria_id`='" . mysql_real_escape_string($categoria[$i]) . "'") or die(mysql_error());
	}
?>
</head>
<body>
</body>
</html>
