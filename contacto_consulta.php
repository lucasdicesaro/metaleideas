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
	<link href="css/style.css" type="text/css" rel="stylesheet">
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
                                                    <td style="height:20px" class="list4"><h2>Metal e Ideas</h2> <strong>Consulta de mensajes</strong></td>
                                                </tr>
                                                <tr>
                                                    <td ><table>
                                                            <tr>
                                                                <td><img src="images/title6_3.gif" alt="" style="margin:6px 0 0 16px"><br>
                                                                <div style="overflow-y: scroll;height:350px" > 
																	<table border="1" id="grilla" >
																		<tr align="center">
																			<td width="15%"><strong>Nombre</strong></td>
																			<td width="15%"><strong>Telefono</strong></td>
																			<td width="30%"><strong>Mail</strong></td>
																			<td width="40%"><strong>Mensaje</strong></td>
																		</tr>
																		<?php
																		   $tablename="contactos";
																		   $query="SELECT * FROM $tablename;";
																		   $result=mysql_db_query ($dbname, $query, $link);
																		   while ($row = mysql_fetch_array ($result))
																		   {
																		      print ("<TR>");
																		      print ("<TD>$row[nombre]</TD>\n");
																		      print ("<TD>$row[telefono]</TD>\n");
																		      print ("<TD>$row[mail]</TD>\n");
																		      print ("<TD>$row[mensaje]</TD>\n");
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
                                                    <td style="height:50px">
                                                    	<a href="contacto.php" class="link2">Volver&nbsp;a&nbsp;Contactos</a>
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
    echo('setMensaje("successDiv", "Hemos recibido su mensaje. En breve lo estaremos contactando.");');
}
if ($_REQUEST['r'] == "false") {
    echo('setMensaje("errorDiv", "No pudimos recibir su mensaje.Por favor intente mas tarde.");');
}
?>
</script>