<!DOCTYPE html>
<html>
<head>
<title>Editar</title>
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

$insertar = mysql_query("UPDATE contacto SET nombre = '".$_POST['Nombre']."', telefono = '".$_POST['Telefono']."', celular = '".$_POST['Celular']."', domicilio = '".$_POST['Domicilio']."' WHERE id = '".$_POST['ID']."' ", $conexion);
if (!$insertar) {
die("Fallo en la insercion de registro en la Base de Datos: " . mysql_error());
}

echo "Sus datos han sido modificados<br/>";

?>
<br/>
<br/>
<form Action="conexion.php" method="post">
<br/>
<input type="submit" value="Regresar"/>
<br/>
<br/>
<input type="submit" onclick = "this.form.action= 'formulario.php'" value="Cerrar Conexion"/>

