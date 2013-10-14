<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title>Administrador</title>
        <meta http-equiv="Content-Style-Type" content="text/css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="css/style.css" type="text/css" rel="stylesheet">

	    <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>

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

            function isItemValido() {
                var form = document.getElementById('form');
                if (isComponenteVacio(form.nombre, "Nombre:", "nombreDiv")) {
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
                setMensaje("nombreDiv", "");
            }

            function save() {
                limpiarMensajes();
                if (isItemValido()) {
					$.ajax({
            			url: "categoria_save.php",
            			type: "post",
            			data: "nombre=" + $("#nombre").val(),
            			success: function(data) {
            				$("#successDiv").html("La creacion fue exitosa");
            				$("#nombre").val("");
            			},
            			error: function() {
            				$("#errorDiv").html("Ocurrio un error al intentar crear el item");
            			}
            		});
				};
                return false;
			}
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
                                                    <td style="height:20px" class="list4"><h2>Metal e Ideas</h2> <strong>Alta de Categor&iacute;a</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    	<table>
															<tr>
																<td width="50" height="30" >
																	<div id="successDiv" class="mensajeSucc" ></div>
																	<div id="errorDiv" class="mensajeErr" ></div>
																</td>
															</tr>
                                                            <tr>
                                                                <td style="width:241px"><img src="images/title6_3.gif" alt="" style="margin:6px 0 0 16px"><br>
                                                                    <form action="categoria_save.php" enctype="multipart/form-data" id="form">
                                                                        <table style="margin-left:19px" class="form">
                                                                            <tr>
                                                                                <td width="250px" style="height:34px">Nombre de la categor&iacute;a:</td>
                                                                                <td>
                                                                                	<input id="nombre" name="nombre" type="text" maxlength="99">
                                                                                    <div id="nombreDiv" class="mensajeErr"></div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                            	<td></td>
                                                                                <td style="height:70px">
                                                                                    <a href="#" onClick="return save();" class="link2" title="Da de alta una nueva categoria">Guardar</a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td style="height:131px">
                                                                                </td>
                                                                                <td>
                                                                                    <a href="productos.php" class="link2" title="Muestra la solapa de productos">Salir</a>
                                                                                    <a href="categoria_consulta.php" class="link2" title="Muestra la grilla de las categorias existentes">Volver</a>
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
