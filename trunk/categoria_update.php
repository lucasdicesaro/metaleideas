<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<?php
    include 'config.php';
    $resultado='false';

    // Connecting to Database
	mysql_connect ($host, $user, $password) or die ('Cant Connect to MySQL');
	// Selecting Database
	mysql_select_db($dbname) or die ('Cant select Database');
	
	$categoria = $_POST['categoria'];
	for ($i = 0; $i < count($categoria); $i++) {
		mysql_query("UPDATE `categorias` SET `orden`=" . $i . " WHERE `categoria_id`='" . $categoria[$i] . "'") or die(mysql_error());
        $resultado='true';
	}
?>

</head>
<body>
</body>
</html>
