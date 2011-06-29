<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>

<?
    include 'config.php';
    $resultado='false';
    $link = mysql_connect($host, $user, $password);
    if(!$link)
	{
		echo "<h2>Error de conexi&oacute;n</h2>";
		die();
	}
    mysql_select_db($dbname);

	if($_REQUEST['mensaje']!="")
	{
		$nom=htmlentities($_REQUEST['nombre']);
		$tel=htmlentities($_REQUEST['telefono']);
		$mail=htmlentities($_REQUEST['mail']);
		$mensaje=htmlentities($_REQUEST['mensaje']);
		mysql_query("INSERT INTO contactos VALUES('$nom','$tel','$mail', '$mensaje');");
        $resultado='true';
	}
    mysql_close($link);
?>
<meta http-equiv="REFRESH" content="0;url=contacto.php?r=<?echo($resultado)?>">
</head>
<body>
</body>
</html>
