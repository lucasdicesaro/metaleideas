<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title>Contacto, Metal E Ideas, Mail</title>
        <meta http-equiv="Content-Style-Type" content="text/css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="css/style.css" type="text/css" rel="stylesheet">
        
	    <link href="uploadify/uploadify.css" type="text/css" rel="stylesheet" />
	    <script type="text/javascript" src="uploadify/jquery-1.4.2.min.js"></script>
	    <script type="text/javascript" src="uploadify/swfobject.js"></script>
	    <script type="text/javascript" src="uploadify/jquery.uploadify.v2.1.4.min.js"></script>
	    <script type="text/javascript">
	    $(document).ready(function() {
	      $('#file_thumbs_upload').uploadify({
	        'uploader'  : 'uploadify/uploadify.swf',
	        'script'    : 'uploadify/uploadify.php',
	        'cancelImg' : 'uploadify/cancel.png',
	        'folder'    : 'images/thumbs',
	        'auto'      : true,
	        'fileExt'   : '*.jpg;*.gif;*.png',
	        'fileDesc'  : 'Web Image Files (.JPG, .GIF, .PNG)',
			'sizeLimit' : 10240
	      });
	    });
	    $(document).ready(function() {
	      $('#file_upload').uploadify({
	        'uploader'  : 'uploadify/uploadify.swf',
	        'script'    : 'uploadify/uploadify.php',
	        'cancelImg' : 'uploadify/cancel.png',
	        'folder'    : 'images/800x600',
	        'auto'      : true,
	        'fileExt'   : '*.jpg;*.gif;*.png',
	        'fileDesc'  : 'Web Image Files (.JPG, .GIF, .PNG)',
			'sizeLimit' : 102400
		   });
	    });
	    </script>
        
        
        
        <script  language="javascript">
            function trim(value) {
                return value.replace(/^\s+|\s+$/,'');
            }

            function isComponenteVacio(componente, valor, divMensaje) {
                if (trim(componente.value) == "") {
                    setMensaje(divMensaje, "Debe ingresar el " + valor);
                    componente.select();
                    return true;
                }
                return false;
            };

            function isProductoValido() {
                var form = document.getElementById('form');
                if (isComponenteVacio(form.titulo, "Titulo:", "tituloDiv")) {
                    return false;
                }

                if (isComponenteVacio(form.nombreFoto, "Nombre Foto:", "nombreFotoDiv")) {
                    return false;
                }

                return true;
            };

            function setMensaje(componenteId, mensaje) {
    		    object = document.getElementById(componenteId);
    		    if (document.all) {//IE
    		        object.innerText = mensaje;
    		    } else {
    		        object.textContent = mensaje;
    		    }
    		}

            function limpiarMensajes() {
                setMensaje("tituloDiv", "");
                setMensaje("nombreFotoDiv", "");
            }

            function enviarProducto() {
                limpiarMensajes();
                if (isProductoValido()) {
                    document.getElementById('form').submit();
                }

                return false;
            };
        </script>
    </head>
    <body >
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
                                                    <td style="height:20px" class="list4"><h2>Metal e Ideas</h2> <strong>Alta Productos</strong></td>
                                                </tr>
                                                <tr>
                                                    <td ><table>
                                                            <tr>
                                                                <td style="width:241px"><img src="images/title6_3.gif" alt="" style="margin:6px 0 0 16px"><br>
                                                                    <form action="producto_save.php" enctype="multipart/form-data" id="form">
                                                                        <table style="margin-left:19px" class="form">
<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include 'config.php';
error_reporting(E_ALL & ~E_DEPRECATED);
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
?>
                                                                            <tr>
                                                                                <td width="250px" style="height:34px">Categor&iacute;a:</td>
                                                                                <td>
                                                                                	<select name="categoria">
																						<?php
																							   $query="SELECT * FROM categorias ORDER BY orden";
																							   $result=mysql_db_query ($dbname, $query, $link);
																							   while ($row = mysql_fetch_array ($result))
																							   {
																							      print ("<option value=\"$row[categoria_id]\">$row[nombre]</option>\n");
																							   }
																							   mysql_free_result($result);
																						?>
                                                                                	</select>
                                                                                </td>
                                                                            </tr>
<?php
mysql_close($link);
?>
																			<tr>
                                                                                <td width="250px" style="height:34px">T&iacute;tulo de la foto:</td>
                                                                                <td>
                                                                                	<input name="titulo" type="text">
                                                                                    <div id="tituloDiv" class="mensajeErr"></div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td style="height:34px">Nombre del archivo de la foto:</td>
                                                                                <td>
                                                                                	<input name="nombreFoto" type="text">
                                                                                    <div id="nombreFotoDiv" class="mensajeErr"></div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td style="height:50px">Imagen mediana (tama&ntilde;o 800x600px):</td>
                                                                                <td style="height:50px">
                                                                                	<input id="file_upload" name="file_upload" type="file" />
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td style="height:50px">Imagen miniatura (tama&ntilde;o 72x72px):</td>
                                                                                <td style="height:50px">
                                                                                	<input id="file_thumbs_upload" name="file_thumbs_upload" type="file" />
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                            	<td></td>
                                                                                <td style="height:70px">
                                                                                    <a href="#" onClick="return enviarProducto();" class="link2" title="Da de alta un nuevo producto">Guardar</a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td style="height:131px">
                                                                                </td>
                                                                                <td>
                                                                                    <a href="productos.php" class="link2" title="Muestra la solapa de productos">Salir</a>
                                                                                    <a href="producto_consulta.php" class="link2" title="Muestra la grilla de los productos existentes">Volver</a>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                </form></td>
                                                            </tr>
                                                    </table></td>
                                                </tr>
                                                <tr>
                                                    <td style="height:29px"></td>
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
                            </table></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
