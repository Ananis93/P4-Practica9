<?php
session_start();
$conexion = mysql_connect("localhost","root","")
or die ("Fallo en el establecimiento de la conexión");


mysql_select_db("directorio")
or die("Error en la selección de la base de datos");

?>

<!DOCTYPE html>
<html>
<head>
<title>Agregar</title>
</head>
<body>
<Table width= "50%" align="center" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>
<fieldset>


<form Action="Agregar1.php" method="post">
ID<br/>
<input type="text" name="ID"><br/>
Nombre<br/>
<input type="text" name="Nombre"><br/>
Telefono<br/>
<input type="text" name="Telefono"><br/>
Celular<br/>
<input type="text" name="Celular"><br/>
Domicilio<br/>
<input type="text" name="Domicilio"><br/>

<input type="submit" value="Enviar"/><br/>

</body>
</html>