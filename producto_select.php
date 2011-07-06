<?php
	include 'config.php';
	error_reporting(E_ALL & ~E_DEPRECATED);
	mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
	mysql_select_db($dbname) or die ('Cant select Database');
	
	if(isset($_REQUEST['categoria_id'])) {
		$categoria_id = htmlentities($_REQUEST['categoria_id']);
		$query = 'SELECT * FROM `productos` WHERE `categoria_id` = ' . $categoria_id . ' ORDER BY `orden` ASC';
		$result = mysql_query($query) or die(mysql_error());
		while($row = mysql_fetch_array($result)) {
			echo '<li class="ui-state-default ui-corner-top ui-corner-bottom" id="producto_' . $row['producto_id'] . '"><span class="ui-icon ui-icon-arrowthick-2-n-s fl_left list-icon"></span>' . utf8_encode($row['titulo']) . '<span onclick="borrar(' . $row['producto_id'] . ')" class="cursor-pointer ui-icon ui-icon-close fl_right"></span></li>';																			
		}
	}
	else {
		echo '<div class="mensajeErr">Elija primero una categoria, por favor</div>';
	}
?>
