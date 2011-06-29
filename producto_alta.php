<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title>Contacto, Metal E Ideas, Mail</title>
        <meta http-equiv="Content-Style-Type" content="text/css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="style.css" type="text/css" rel="stylesheet">
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

            function limpiarMensajes() {
                setMensaje("tituloDiv", "");

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
                                                                            <tr>
                                                                                <td style="height:34px">T&iacute;tulo de la foto: <input name="titulo" type="text">
                                                                                    <div id="tituloDiv" class="mensajeErr"></div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td style="height:70px">
                                                                                    <a href="#" onClick="document.getElementById('form').reset()" class="link1">Limpiar</a><img src="images/spacer.gif" alt="" width="9" height="1">
                                                                                    <a href="#" onClick="return enviarProducto();" class="link2">Aceptar</a>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td style="height:131px">
                                                                                    <a href="productos.php" class="link2">Volver a Productos</a>
                                                                                    <a href="producto_consulta.php" class="link2">Consultar Productos</a>
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
