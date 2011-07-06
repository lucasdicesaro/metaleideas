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

    <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/ui-darkness/jquery-ui-1.8.14.custom.css" media="screen" />

	<script type="text/javascript">
		$(document).ready(
			function() {
				$("#sortable").sortable({
					update : function () {
						serial = $('#sortable').sortable('serialize');
						$.ajax({
							url: "producto_update.php",
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

		function borrar(producto_id) {
			var rta = confirm("El elemento se borrara. Esta seguro?");
			if (rta) {
				$.ajax({
					url: "producto_delete.php",
					type: "post",
					data: "producto_id="+producto_id,
					success: function(data) {
						refreshItems();
					},
					error: function() {
						alert("theres an error with AJAX");
					}
				});
			}
		}

		function refreshItems() {
			$.ajax({
				url: "producto_select_encoded.php",
				type: "post",
				success: function(data) {
					$('#sortable').html(data);				
				},
				error: function() {
					alert("theres an error with AJAX");
				}
			});
		}
	</script>
</head>
	<body>
        <table style="height:100%">
            <tr>
                <td>
                    <table class="style" align="center">
                        <tr>
                            <td>
                            	<table>
                                    <tr>
                                        <td style="width:20px" ></td>
                                        <td>
                                        	<table style="width:726px" >
                                                <tr>
                                                    <td style="height:20px"></td>
                                                </tr>
                                                <tr>
                                                    <td style="height:20px" class="list4"><h2>Metal e Ideas</h2> <strong>Consulta de productos</strong></td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                    	<table>
                                                            <tr>
                                                                <td>
                                                                	<img src="images/title6_3.gif" alt="" style="margin:6px 0 0 16px"><br>
                                                                	<div style="overflow-y: scroll;height:350px" > 
																		<ul id="sortable">
																			<?
																				include 'producto_select.php';
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
                                                    	<a href="categoria_consulta.php" class="link2">Ver categor&iacute;as</a>
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
