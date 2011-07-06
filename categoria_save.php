<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?
    include 'config.php';
	// Connecting to Database
	mysql_connect ($host, $user, $password) or die ('Cant Connect to MySQL');
	// Selecting Database
	mysql_select_db($dbname) or die ('Cant select Database');

	$max_order = mysql_query ('SELECT MAX(`orden`)+1 FROM `categorias`');
	$max_order = mysql_fetch_array($max_order, MYSQL_BOTH);
	$next = $max_order[0];

	if(isset($_REQUEST['nombre'])) {
		$nom=mysql_real_escape_string(utf8_decode($_REQUEST['nombre']));
		mysql_query("INSERT INTO categorias (nombre, orden) VALUES ('$nom','$next');");
	}
?>
	<meta http-equiv="REFRESH" content="0;url=categoria_consulta.php?r=<?echo($resultado)?>">
</head>
<body>
</body>
</html>
