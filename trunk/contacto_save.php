<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?
    include 'config.php';
    $resultado='false';
    // Connecting to Database
	mysql_connect ($host, $user, $password) or die ('Cant Connect to MySQL');
	// Selecting Database
	mysql_select_db($dbname) or die ('Cant select Database');

	if(isset($_REQUEST['mensaje'])) {

		$nom=mysql_real_escape_string(utf8_decode($_REQUEST['nombre']));
		$tel=mysql_real_escape_string(utf8_decode($_REQUEST['telefono']));
		$mail=mysql_real_escape_string(utf8_decode($_REQUEST['mail']));
		$mensaje=mysql_real_escape_string(utf8_decode($_REQUEST['mensaje']));
		
		$query = "INSERT INTO `contactos`(`nombre`, `telefono`, `mail`, `mensaje`) VALUES('".$nom."', '".$tel."', '".$mail."', '".$mensaje."')";
//		echo $query;
		mysql_query($query);
        $resultado='true';
	}
?>
<meta http-equiv="REFRESH" content="0;url=contacto.php?r=<?echo($resultado)?>">
</head>
<body>
</body>
</html>
