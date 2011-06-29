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

	if($_REQUEST['titulo']!="")
	{
		$tit=htmlentities($_REQUEST['titulo']);
		mysql_query("INSERT INTO productos (titulo) VALUES ('$tit');");
        $resultado='true';
	}
    mysql_close($link);
?>
<meta http-equiv="REFRESH" content="0;url=producto_consulta.php?r=<?echo($resultado)?>">
</head>
<body>
</body>
</html>
