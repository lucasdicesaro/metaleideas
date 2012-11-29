<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?
	// get language preference
	if (isset($_GET["lang"])) {
	    $language = substr($_GET["lang"], 0, 2);
	}
	else {
		$language = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	}
	$spanish = $language == "es";
	if (!$spanish) {
		$language = "en";
	}

    include 'config.php';
    $resultado='false';
    error_reporting(E_ALL & ~E_DEPRECATED);
    error_reporting(E_ERROR | E_PARSE);
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
        
		$to = 'metaleideas@gmail.com';
		$subject = 'Nuevo mensaje';
		$message = 'Nombre: ' . $nom . "\n" . 'Telefono: ' . $tel . "\n" . 'Mail: ' . $mail . "\n" . 'Mensaje: ' . $mensaje;
		$from = 'Metal e Ideas';
		$headers = 'From:' . $from;
		mail($to, $subject, $message, $headers);
	}
?>
<meta http-equiv="REFRESH" content="0;url=contacto.php?lang=<?echo($language)?>&r=<?echo($resultado)?>">
</head>
<body>
</body>
</html>
