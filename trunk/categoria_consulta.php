<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include 'config.php';
error_reporting(E_ALL & ~E_DEPRECATED);
mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
mysql_select_db($dbname) or die ('Cant select Database');
?>
<html>
<head>
	<link href="css/style.css" type="text/css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/ui-darkness/jquery-ui-1.8.14.custom.css" media="screen" />
    
	<script type="text/javascript">
		function setMensaje(componenteId, mensaje) {
		    object = document.getElementById(componenteId);
		    if (document.all) {//IE
		        object.innerText = mensaje;
		    } else {
		        object.textContent = mensaje;
		    }
		}

	    // http://jqueryui.com/demos/sortable/
//		$(function() {
//			$("#sortable").sortable();
//			$("#sortable").disableSelection();
//		});
		// http://www.hdeya.com/blog/2009/05/sorting-items-on-the-fly-ajax-using-jquery-ui-sortable-php-mysql/
		$(document).ready(
			function() {
				$("#sortable").sortable({
					update : function () {
						serial = $('#sortable').sortable('serialize');
						alert("serial: " + serial);
						$.ajax({
							url: "categoria_update.php",
							type: "post",
							data: serial,
							error: function() {
								alert("theres an error with AJAX");
							}
						});
					}
				});
			}
		);
    </script>
	<style type="text/css">
		#sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
		#sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
		#sortable li span { position: absolute; margin-left: -1.3em; }
	</style>
</head>
	<body>
        <table style="height:100%">
            <tr>
                <td >
                    <table class="style" align="center">
                        <tr>
                            <td ><table>
                                    <tr>
                                        <td style="width:20px" ></td>
                                        <td ><table style="width:726px" >
                                                <tr>
                                                    <td style="height:20px"></td>
                                                </tr>
                                                <tr>
                                                    <td style="height:20px" class="list4"><h2>Metal e Ideas</h2> <strong>Consulta de categor&iacute;as</strong></td>
                                                </tr>
                                                <tr>
                                                    <td ><table>
                                                            <tr>
	                                                            <td width="50" height="30" >
		                                                            <div id="successDiv" class="mensajeSucc" width="50"></div>
		                                                            <div id="errorDiv" class="mensajeErr" width="50"></div>
	                                                            </td>
                                                            </tr>
                                                            <tr>
                                                                <td><img src="images/title6_3.gif" alt="" style="margin:6px 0 0 16px"><br>
                                                                <div style="overflow-y: scroll;height:350px" >
																	<ul id="sortable">
																	<?
																		$result = mysql_query("SELECT * FROM `categorias` ORDER BY `orden` ASC") or die(mysql_error());
																		while($row = mysql_fetch_array($result)) {
																			echo '<li class="ui-state-default" id="categoria_' . $row['categoria_id'] . '"><span class="ui-icon ui-icon-arrowthick-2-n-s"></span>' . $row['nombre'] . "</li>\n";
																		}
																	?>
																	</ul>
																	</div>
                                                                </td>
                                                            </tr>
                                                    	</table>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td style="height:29px"></td>
                                                </tr>
                                                <tr>
                                                    <td style="height:50px" >
                                                    	<a href="productos.php" class="link2">Salir</a>
                                                    	<a href="producto_alta.php" class="link2">Subir&nbsp;Foto</a>
                                                    	<a href="categoria_alta.php" class="link2">Crear categoria</a>
                                                    </td>
                                                </tr>																		
                                                <tr>
                                                    <td class="footer">
                                                        <?
                                                        include 'footer.php';
                                                        ?>
                                                    </td>
                                                </tr>
                                        </table></td>
                                        <td style="width:20px" ></td>
                                    </tr>
                            	</table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
	</body>
</html>
<script type="text/javascript">
<?
	if ($_REQUEST['r'] == "true") {
	    echo('setMensaje("successDiv", "El item se ha dado de alta exitosamente.");');
	}
	if ($_REQUEST['r'] == "false") {
	    echo('setMensaje("errorDiv", "Hubo un error al intentar dar de alta el item.");');
	}
?>
</script>
