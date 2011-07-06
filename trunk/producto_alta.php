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
			'sizeLimit' : 10240,
			'onComplete': function(event, queueID, fileObj, response, data) {
	        	$("#nombreFoto").val(fileObj['name']);
			}
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
			'sizeLimit' : 102400,
			'onComplete': function(event, queueID, fileObj, response, data) {
	        	$("#nombreFoto").val(fileObj['name']);
			}
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
            }

            function save() {
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
	include 'config.php';
	error_reporting(E_ALL & ~E_DEPRECATED);
	mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
	mysql_select_db($dbname) or die ('Cant select Database');
?>
                                                                            <tr>
                                                                                <td width="250px" style="height:34px">Categor&iacute;a:</td>
                                                                                <td>
                                                                                	<select name="categoria">
																						<?php
																							   $result = mysql_query("SELECT * FROM `categorias` ORDER BY `orden` ASC") or die(mysql_error());
																							   while ($row = mysql_fetch_array ($result))
																							   {
																							      echo utf8_encode("<option value=\"$row[categoria_id]\">$row[nombre]</option>\n");
																							   }
																						?>
                                                                                	</select>
                                                                                </td>
                                                                            </tr>
																			<tr>
                                                                                <td width="250px" style="height:34px">T&iacute;tulo de la foto:</td>
                                                                                <td>
                                                                                	<input name="titulo" type="text">
                                                                                    <div id="tituloDiv" class="mensajeErr"></div>
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
		                                                                            <input id="nombreFoto" name="nombreFoto" type="hidden" />
                                                                                    <a href="#" onClick="return save();" class="link2" title="Da de alta un nuevo producto">Guardar</a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td style="height:131px">
                                                                                </td>
                                                                                <td>
                                                                                    <a href="productos.php" class="link2" title="Muestra la solapa de productos">Salir</a>
                                                    								<a href="categoria_consulta.php" class="link2">Ver categor&iacute;as</a>
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
