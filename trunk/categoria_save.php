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

	$query="SELECT MAX(orden)+1 FROM categorias";
	$max_order=mysql_query ($query, $link);
	$max_order = mysql_fetch_array($max_order, MYSQL_BOTH);
	$next = $max_order[0];
	if($_REQUEST['nombre']!="")
	{
		$nom=htmlentities($_REQUEST['nombre']);
		mysql_query("INSERT INTO categorias (nombre, orden) VALUES ('$nom','$next');");
        $resultado='true';
	}
    mysql_close($link);
?>
<meta http-equiv="REFRESH" content="0;url=categoria_consulta.php?r=<?echo($resultado)?>">
</head>
<body>
</body>
</html>
