<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
    <title>Medidor de Cables, Metal e Ideas, Automatico, Cables, Medidor, Medicion, Contador, Mecanico</title>
    <meta http-equiv="Content-Style-Type" content="text/css">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link href="css/style.css" type="text/css" rel="stylesheet">

    <script type="text/javascript" src="js/jquery-1.5.1.min.js"></script>
    <script type="text/javascript" src="js/jquery.lightbox-0.5.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/jquery.lightbox-0.5.css" media="screen" />
    <script type="text/javascript">
    	// http://leandrovieira.com/projects/jquery/lightbox/
	    function activateGallery(categoria_id) {
	        $('#gallery'+categoria_id+' a').lightBox({
	        	txtImage: 'Imagen',
	        	txtOf: 'de'
			});
	    }
    </script>
	<style type="text/css">
		.gallery {
			background-color: #444;
			padding: 10px;
			width: 520px;
		}
		.gallery ul { list-style: none; }
		.gallery ul li { display: inline; }
		.gallery ul img {
			border: 5px solid #3e3e3e;
			border-width: 5px 5px 20px;
		}
		.gallery ul a:hover img {
			border: 5px solid #fff;
			border-width: 5px 5px 20px;
			color: #fff;
		}
		.gallery ul a:hover { color: #fff; }
	</style>
	</head>
    <body >
        <table>
            <tr>
                <td >
                    <table class="style" align="center">
                        <tr>
                            <td >
                                <?
                                $boton=4;
                                include 'header.php';
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td>
                            	<table>
                                    <tr>
                                        <td style="width:20px" ></td>
                                        <td >
                                        	<table style="width:726px" >
<?php
	include 'config.php';
	error_reporting(E_ALL & ~E_DEPRECATED);
	mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
	mysql_select_db($dbname) or die ('Cant select Database');
?>
												<tr>
													<td>
														<div>
															<?php
																$result = mysql_query("SELECT * FROM `categorias` ORDER BY `orden` ASC") or die(mysql_error());
																while ($row = mysql_fetch_array ($result))
																{
																	echo '<h2 id="categoria" class="list4" ><strong>' . utf8_encode($row['nombre']) . '</strong></h2>'."\n";
																	echo '<p>Cliquee en las im&aacute;genes para ver sus detalles.</p>'."\n";
																	echo '<div id="gallery'.$row['categoria_id'].'" class="gallery" style="width:726px" >'."\n";
																	echo '<ul>'."\n";
																	$categoria_id = $row['categoria_id'];
																	$query = 'SELECT * FROM `productos` WHERE `categoria_id` = ' . $categoria_id . ' ORDER BY `orden` ASC';
																	$resultproductos = mysql_query($query) or die(mysql_error());
																	while ($rowproductos = mysql_fetch_array ($resultproductos))
																	{
																		echo '<li>'."\n";
																		echo '<a href="images/800x600/' . $rowproductos['nombre_foto'] . '" title="' . $rowproductos['titulo'] . '">'."\n";
																		echo '<img src="images/thumbs/' . $rowproductos['nombre_foto'] . '" width="72" height="72" alt="' . $rowproductos['titulo'] . '" />'."\n";
																		echo '</a>'."\n";
																		echo '</li>'."\n";
																	}
																	echo '</ul>'."\n";
																	echo '</div>'."\n";

																    echo '<script type="text/javascript">';
																    echo 'activateGallery('.$categoria_id.');';
																    echo '</script>	';
																}
															?>
														</div>
													</td>
												</tr>
                                                <tr>
                                                    <td align="center" valign="middle">
                                                        <div nowrap="nowrap" class="list4" style="font-size:16px;height:35px;margin-top:20px;"><b><a target="_blank" href="http://www.metaleideas.blogspot.com/">¡¡¡ Vea nuestros &uacute;ltimos productos !!!</a></b></div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="footer">
                                                        <?
                                                        include 'footer.php';
                                                        ?>
                                                    </td>
                                                </tr>
                                        	</table>
                                        </td>
                                        <td style="width:20px" ></td>
                                    </tr>
                            	</table>
                            </td>
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
    </body>
</html>
