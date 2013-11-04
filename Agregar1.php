
<!DOCTYPE html>
<html>
<head>
<title>Sesion</title>
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

$insertar = mysql_query("INSERT INTO contacto (id, nombre, telefono, celular,domicilio)
VALUES ('".$_POST['ID']."','".$_POST['Nombre']."', '".$_POST['Telefono']."', '".$_POST['Celular']."', '".$_POST['Domicilio']."')", $conexion);
if (!$insertar) {
die("Fallo en la insercion de registro en la Base de Datos: " . mysql_error());
}

echo "Sus datos han sido insertados<br/>";

?>
<br/>
<br/>
<form Action="Agregar.php" method="post">
<br/>
<input type="submit" value="Agregar Datos"/>
<br/>
<br/>
<input type="submit" onclick = "this.form.action= 'conexion.php'" value="Ver Datos"/>
<br/>
<br/>
<input type="submit" onclick = "this.form.action= 'formulario.php'" value="Cerrar Conexion"/>

