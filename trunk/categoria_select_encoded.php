<?php
	include 'config.php';
	error_reporting(E_ALL & ~E_DEPRECATED);
	mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
	mysql_select_db($dbname) or die ('Cant select Database');
	$result = mysql_query("SELECT * FROM `categorias` ORDER BY `orden` ASC") or die(mysql_error());
	while($row = mysql_fetch_array($result)) {
		echo utf8_encode('<li class="ui-state-default ui-corner-top ui-corner-bottom" id="categoria_' . $row['categoria_id'] . '"><span class="ui-icon ui-icon-arrowthick-2-n-s fl_left list-icon"></span>' . $row['nombre'] . '<span onclick="borrar(' . $row['categoria_id'] . ')" class="cursor-pointer ui-icon ui-icon-close fl_right"></span><span onclick="buscarproductosxcategoria(' . $row['categoria_id'] . ')" class="cursor-pointer ui-icon ui-icon-search fl_right" title="Ver fotos de la categoria"></span></li>');																			
	}
?>
