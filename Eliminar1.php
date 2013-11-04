<!DOCTYPE html>
<html>
<head>
<title>Eliminar</title>
</head>
<body>
<Table width= "50%" align="center" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>
<fieldset>


<?php

$conexion = mysql_connect("localhost","root","")
or die ("Fallo en el establecimiento de la conexión");

mysql_select_db("directorio")
or die("Error en la selección de la base de datos");

$insertar = mysql_query("DELETE FROM contacto WHERE id = '".$_POST['ID']."' ", $conexion);

echo "Sus datos han sido borrados<br/>";

?>
<br/>
<br/>
<form Action="conexion.php" method="post">
<br/>
<input type="submit" value="Regresar"/>
<br/>
<br/>
<input type="submit" onclick = "this.form.action= 'formulario.php'" value="Cerrar Conexion"/>

