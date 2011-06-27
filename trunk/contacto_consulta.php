<?php
/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
include 'config.php';
$link = mysql_connect ($host, $user, $password) or die ("<center>No se puede conectar con la base de datos\n</center>\n");
?>
<html>
<head>
<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>

<table>
<tr>
<td><strong>Nombre</strong></td>
<td><strong>Telefono</strong></td>
<td><strong>Mail</strong></td>
<td><strong>Mensaje</strong></td>
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

</body>
</html>
<?php
mysql_close($link);
?>