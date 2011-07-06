<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?
    include 'config.php';
	error_reporting(E_ALL & ~E_DEPRECATED);
	mysql_connect($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
	mysql_select_db($dbname) or die ('Cant select Database');
    
	$max_order = mysql_query ('SELECT MAX(`orden`)+1 FROM `productos` WHERE `categoria_id` = '. $_REQUEST['categoria']);
	$max_order = mysql_fetch_array($max_order, MYSQL_BOTH);
	$next = $max_order[0];
    if(isset($_REQUEST['titulo'])) {
		$tit = mysql_real_escape_string(utf8_decode($_REQUEST['titulo']));
		$nombre_foto = mysql_real_escape_string(utf8_decode($_REQUEST['nombreFoto']));
		$categoria_id = mysql_real_escape_string(utf8_decode($_REQUEST['categoria']));
		mysql_query("INSERT INTO `productos` (`nombre_foto`, `titulo`, `orden`, `categoria_id`) VALUES ('$nombre_foto','$tit', '$next','$categoria_id')");
	}
?>
	<meta http-equiv="REFRESH" content="0;url=categoria_consulta.php?r=<?echo($resultado)?>">
</head>
<body>
</body>
</html>
