<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include 'config.php';
error_reporting(E_ALL & ~E_DEPRECATED);
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
?>
<html>
<head>
	<link href="style.css" type="text/css" rel="stylesheet">
	<script type="text/javascript">
		function setMensaje(componenteId, mensaje) {
		    object = document.getElementById(componenteId);
		    if (document.all) {//IE
		        object.innerText = mensaje;
		    } else {
		        object.textContent = mensaje;
		    }
		}
	</script>
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
                                                    <td style="height:20px" class="list4"><h2>Metal e Ideas</h2> <strong>Consulta de productos</strong></td>
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
                                                                <td style="width:241px"><img src="images/title6_3.gif" alt="" style="margin:6px 0 0 16px"><br>
                                                                <div style="overflow-y: scroll;height:350px" > 
																	<table border="1" id="grilla">
																		<tr align="center">
																			<td><strong>Nombre Foto</strong></td>
																			<td><strong>T&iacute;tulo</strong></td>
																		</tr>
																		<?php
																		   $tablename="productos";
																		   $query="SELECT * FROM $tablename;";
																		   $result=mysql_db_query ($dbname, $query, $link);
																		   while ($row = mysql_fetch_array ($result))
																		   {
																		      print ("<TR>");
																		      print ("<TD>$row[nombre_foto]</TD>\n");
																		      print ("<TD>$row[titulo]</TD>\n");
																		      print ("</TR>");
																		   }
																		   mysql_free_result($result);
																		?>
																	</table>
																	<?php
																	mysql_close($link);
																	?>
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
                                                    	<a href="productos.php" class="link2">Volver a Productos</a>
                                                    	<a href="producto_alta.php" class="link2">Alta Productos</a>
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
