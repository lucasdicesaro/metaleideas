<?php
	include 'config.php';
	error_reporting(E_ALL & ~E_DEPRECATED);
	mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
	mysql_select_db($dbname) or die ('Cant select Database');
	
	$query = 'SELECT * FROM `productos` ';
	if(isset($_REQUEST['categoria_id'])) {
		$categoria_id = htmlentities($_REQUEST['categoria_id']);
		$query .= ' WHERE `categoria_id` = ' . $categoria_id . ' ';
	}
	$query .= ' ORDER BY `orden` ASC';
	
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_array($result)) {
		echo utf8_encode('<li class="ui-state-default ui-corner-top ui-corner-bottom" id="producto_' . $row['producto_id'] . '"><span class="ui-icon ui-icon-arrowthick-2-n-s fl_left list-icon"></span>' . $row['titulo'] . '<span onclick="borrar(' . $row['producto_id'] . ')" class="cursor-pointer ui-icon ui-icon-close fl_right"></span><span class="cursor-pointer ui-icon ui-icon-search fl_right"></span></li>');																			
	}
?>
