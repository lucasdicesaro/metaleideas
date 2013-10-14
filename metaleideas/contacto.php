<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title>Contacto, Metal E Ideas, Mail</title>
        <meta http-equiv="Content-Style-Type" content="text/css">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link href="css/style.css" type="text/css" rel="stylesheet">
        <script  language="javascript">
            function trim(value) {
                return value.replace(/^\s+|\s+$/,'');
            }

            function isTelefonoValido() {
                if (isNaN(form.telefono.value)) {
                    setMensaje("telefonoDiv", "<?php if ($spanish) { echo "El tel&eacute;fono debe ser num&eacute;rico"; } else { echo "The phone must be numeric"; } ?>");
                    form.telefono.select();
                    return false;
                }
                else {
                    if (form.telefono.value.length < 8) {
                        setMensaje("telefonoDiv", "<?php if ($spanish) { echo "El tel&eacute;fono debe tener al menos 8 digitos"; } else { echo "The phone must be at least 8 digits"; } ?>");
                        form.telefono.select();
                        return false;
                    }
                }
                return true;
            }

            function isMailValido() {
                var form = document.getElementById('form');
                var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
                if(reg.test(form.mail.value) == false) {
                    setMensaje("mailDiv", "<?php if ($spanish) { echo "Direcci&oacute;n de mail inv&aacute;lida"; } else { echo "Invalid e-mail"; } ?>");
                    form.mail.select();
                    return false;
                }
                return true;
            }

            function isComponenteVacio(componente, valor, divMensaje) {
                if (trim(componente.value) == "") {
                    setMensaje(divMensaje, "<?php if ($spanish) { echo "Debe ingresar su "; } else { echo "You must enter your "; } ?>" + valor);
                    componente.select();
                    return true;
                }
                return false;
            };

            function isContactoValido() {
                var form = document.getElementById('form');
                if (isComponenteVacio(form.nombre, "<?php if ($spanish) { echo "Nombre"; } else { echo "Name"; } ?>:", "nombreDiv")) {
                    return false;
                }
                if (isComponenteVacio(form.telefono, "<?php if ($spanish) { echo "Tel&eacute;fono"; } else { echo "Phone"; } ?>:", "telefonoDiv")) {
                    return false;
                }
                else {
                    if (!isTelefonoValido()) {
                        return false;
                    }
                }
                if (isComponenteVacio(form.mail, "E-mail:", "mailDiv")) {
                    return false;
                }
                else {
                    if (!isMailValido()) {
                        return false;
                    }
                }
                if (isComponenteVacio(form.mensaje, "<?php if ($spanish) { echo "Mensaje"; } else { echo "Message"; } ?>:", "mensajeDiv")) {
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
                setMensaje("telefonoDiv", "");
                setMensaje("mailDiv", "");
                setMensaje("mensajeDiv", "");
                setMensaje("successDiv", "");
                setMensaje("errorDiv", "");

            }

            function enviarContacto() {
                limpiarMensajes();
                if (isContactoValido()) {
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
                            <td >
                                <?
                                $boton=6;
                                include 'header.php';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td ><table>
                                    <tr>
                                        <td style="width:20px" ></td>
                                        <td ><table style="width:726px" >
                                                <tr>
                                                    <td style="height:20px"></td>
                                                </tr>
                                                <tr>
                                                    <td ><table style="height:364px">
                                                            <tr>
                                                                <td style="width:484px"><img src="images/title6_1.gif" alt="" style="margin:6px 0 0 7px"><br>
                                                                    <br style="line-height:16px">
                                                                    <div style="margin-left:11px; width:455px">
                                                                        <img src="images/rodado-metaleideas.jpg" height="130" align="left" style="margin:2px 23px 0 0" alt="">
                                                                        <strong>Metal e Ideas</strong><br>
                                                                        <br style="line-height:3px">
                                                                        Isleños 1661<img src="images/spacer.gif" alt="" width="20" height="1">Gregorio Laferrere<br>
                                                                        <br style="line-height:3px">
                                                                        La Matanza<img src="images/spacer.gif" alt="" width="55" height="1">Pcia de Bs As<br>
                                                                        <br style="line-height:3px">
                                                                        <?php if ($spanish) { echo "Tel&eacute;fono"; } else { echo "Phone"; } ?>:<img src="images/spacer.gif" alt="" width="41" height="1">+54 11 4467 8062<br>
                                                                        <br style="line-height:3px">
                                                                        <?php if ($spanish) { echo "M&oacute;vil"; } else { echo "Mobile"; } ?>:<img src="images/spacer.gif" alt="" width="54" height="1">+54 911 6184 5833<br>
                                                                        <br style="line-height:3px">
                                                                        &nbsp;<img src="images/spacer.gif" alt="" width="101" height="1">&nbsp;<br>
                                                                        <br style="line-height:3px">
                                                                        <a class="link3" target="_blank" href="http://maps.google.es/maps?saddr=Au.+Luis+Dellepiane&daddr=Cnel.+Isle%C3%B1o+1661,+Gregorio+de+Laferrere,+Buenos+Aires,+Argentina&hl=es&ie=UTF8&ll=-34.710574,-58.521767&spn=0.102448,0.154324&sll=-34.71784,-58.53128&sspn=0.102439,0.154324&geocode=FZi47v0dlZWD_A%3BFZn77f0duS6C_CkxKc5ilcW8lTGrIxhqHkND8A&mra=mrv&z=13" ><?php if ($spanish) { echo "Click aqu&iacute; para saber c&oacute;mo llegar<br>desde&nbsp;"; } else { echo "Click here to find out how to get<br>from&nbsp;"; } ?>Av. Gral Paz y Au. Ricchieri</a><br>
                                                                        <img src="images/title6_2.gif" alt="" style="margin-left:7px"><br>
                                                                        <br style="line-height:13px">
                                                                        	<?php
	                                                                        	if ($spanish) {
																					echo "<strong>Envios.</strong> Capital Federal y Gran Bs As, <span>a convenir</span>. Otras localidades: Llevaremos su compra al transporte que usted indique. La mercadería viaja por cuenta y orden del comprador.";
	                                                                        	} else {
	                                                                        		echo "<strong>Shipping.</strong> Capital Federal and Gran Buenos Aires, <span>to be arranged</span>. Other locations: We will move your purchase to the shipping of your preference. The merchandise travels at buyer's order.";
	                                                                        	}
                                                                        	?>
                                                                        <br>
                                                                        <br style="line-height:15px">
                                                                        <table style="height:53px;  width:442px" >
                                                                            <tr>
                                                                                <td style="width:253px"><strong><?php if ($spanish) { echo "Ventas"; } else { echo "Sales"; } ?>:</strong><br>
                                                                                    <br style="line-height:3px">
                                                                                    Tel.:<img src="images/spacer.gif" alt="" width="20" height="1">+54 11 4467 8062<br>
                                                                                    <br style="line-height:3px">
                                                                                    E-mail: <span><a href="mailto:ventas@metaleideas.com.ar">ventas@metaleideas.com.ar</a></span>
                                                                                </td>
                                                                                <td style="width:190px"><strong><?php if ($spanish) { echo "Atención al cliente"; } else { echo "Customer Support"; } ?>:</strong><br>
                                                                                    <br style="line-height:3px">
                                                                                    Tel.:<img src="images/spacer.gif" alt="" width="20" height="1">+54 11 4467 8062<br>
                                                                                    <br style="line-height:3px">
                                                                                    E-mail: <span><a href="mailto:info@metaleideas.com.ar">info@metaleideas.com.ar</a></span>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <br style="line-height:6px">
                                                                                    <strong><?php if ($spanish) { echo "Gerente de Ventas"; } else { echo "Sales Manager"; } ?>:</strong> Juan Medina<br>
                                                                                    E-mail: <span><a href="mailto:juan.medina@metaleideas.com.ar">juan.medina@metaleideas.com.ar</a></span>
                                                                                </td>
                                                                            </tr>
                                                                        </table>
                                                                </div></td>
                                                                <td class="bg3"><img src="images/bg1_3.gif" alt="" align="top"></td>
                                                                <td style="width:241px"><img src="images/title6_3.gif" alt="" style="margin:6px 0 0 16px"><br>
                                                                    <br style="line-height:16px">
                                                                    <form action="contacto_save.php" enctype="multipart/form-data" id="form">
                                                                        <table style="height:263px;  width:213px; margin-left:19px" class="form">
                                                                            <tr>
                                                                                <td style="height:44px"><?php if ($spanish) { echo "Nombre"; } else { echo "Name"; } ?>:<br>
                                                                                    <input name="nombre" type="text">
                                                                                    <div id="nombreDiv" class="mensajeErr"></div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td style="height:44px"><?php if ($spanish) { echo "Tel&eacute;fono"; } else { echo "Phone"; } ?>:<br>
                                                                                    <input name="telefono" type="text">
                                                                                    <div id="telefonoDiv" class="mensajeErr"></div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td style="height:44px">E-mail:<br>
                                                                                    <input name="mail" type="text">
                                                                                    <div id="mailDiv" class="mensajeErr"></div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td width="50" height="30" >
                                                                                    <div id="successDiv" class="mensajeSucc" style="width:200px"></div>
                                                                                    <div id="errorDiv" class="mensajeErr" style="width:200px"></div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td style="height:131px"><?php if ($spanish) { echo "Mensaje"; } else { echo "Message"; } ?>:<br>
                                                                                    <textarea name="mensaje" cols="0" rows="0"></textarea>
                                                                                    <div id="mensajeDiv" class="mensajeErr"></div>
                                                                                    <br>
                                                                                    <br style="line-height:7px">
                                                                                    <a href="#" onClick="document.getElementById('form').reset()" class="link1"><?php if ($spanish) { echo "Limpiar"; } else { echo "Clean"; } ?></a><img src="images/spacer.gif" alt="" width="9" height="1">
                                                                                    <a href="#" onClick="return enviarContacto();" class="link2"><?php if ($spanish) { echo "Enviar"; } else { echo "Send"; } ?></a>
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
            <tr>
                <td>
                    <table class="footer1" align="center">
                        <tr>
                            <td ></td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <script type="text/javascript">
            var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
            document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
        </script>
        <script type="text/javascript">
            try {
                var pageTracker = _gat._getTracker("UA-8671773-1");
                pageTracker._trackPageview();
            } catch(err) {}
        </script>
		<script type="text/javascript">
			<?
				if ($_REQUEST['r'] == "true") {
					echo('setMensaje("successDiv", "');
					if ($spanish) {
						echo "Hemos recibido su mensaje. En breve lo estaremos contactando.";
					} else {
				    	echo "We have received your message. We will contact you soon.";
					}
					echo('");');
				}
				if ($_REQUEST['r'] == "false") {
					echo('setMensaje("errorDiv", "');
					if ($spanish) {
						echo "No pudimos recibir su mensaje. Por favor intente mas tarde.";
					} else {
				    	echo "We were unable to receive your message. Please, try again later.";
					}
					echo('");');
				}
			?>
		</script>
    </body>
</html>