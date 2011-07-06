<html>
<head>
	<link href="css/style.css" type="text/css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui-1.8.14.custom.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/ui-darkness/jquery-ui-1.8.14.custom.css" media="screen" />
    
	<script type="text/javascript">
		// http://www.hdeya.com/blog/2009/05/sorting-items-on-the-fly-ajax-using-jquery-ui-sortable-php-mysql/
		$(document).ready(
			function() {
				$("#sortable").sortable({
					update : function () {
						serial = $('#sortable').sortable('serialize');
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
		function borrar(categoria_id) {
			var rta = confirm("El elemento se borrara. Esta seguro?");
			if (rta) {
				$.ajax({
					url: "categoria_delete.php",
					type: "post",
					data: "categoria_id="+categoria_id,
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
				url: "categoria_select_encoded.php",
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
                                                                <td>
                                                                	<img src="images/title6_3.gif" alt="" style="margin:6px 0 0 16px"><br>
                                                                	<div style="overflow-y: scroll;height:350px" >                                                                
																		<ul id="sortable">
																			<?
																				include 'categoria_select.php';
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
