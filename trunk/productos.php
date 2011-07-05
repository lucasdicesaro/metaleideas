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
	    $(function() {
	        $('#gallery a').lightBox({
	        	txtImage: 'Imagen',
	        	txtOf: 'de'
			});
	    });
    </script>
	<style type="text/css">
		#gallery {
			background-color: #444;
			padding: 10px;
			width: 520px;
		}
		#gallery ul { list-style: none; }
		#gallery ul li { display: inline; }
		#gallery ul img {
			border: 5px solid #3e3e3e;
			border-width: 5px 5px 20px;
		}
		#gallery ul a:hover img {
			border: 5px solid #fff;
			border-width: 5px 5px 20px;
			color: #fff;
		}
		#gallery ul a:hover { color: #fff; }
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
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include 'config.php';
error_reporting(E_ALL & ~E_DEPRECATED);
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
?>
												<tr>
													<td>
														<div>
															<h2 id="productos" class="list4" ><strong>Nuestros productos</strong></h2>
															<p>Cliquee en las im&aacute;genes para ver sus detalles.</p>
															<div id="gallery" style="width:726px" >
																<ul>
																	<?php
																	   $query="SELECT * FROM productos;";
																	   $result=mysql_db_query ($dbname, $query, $link);
																	   while ($row = mysql_fetch_array ($result))
																	   {
																	      print ("<li>");
																	      print ("<a href=\"images/800x600/$row[nombre_foto]\" title=\"$row[titulo]\">\n");
																	      print ("<img src=\"images/thumbs/$row[nombre_foto]\" width=\"72\" height=\"72\" alt=\"$row[titulo]\" />\n");
																	      print ("</a>");
																	      print ("</li>");
																	    }
																	    mysql_free_result($result);
																	?>
															    </ul>
															</div>
														</div>
													</td>
												</tr>
<?php
mysql_close($link);
?>
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
