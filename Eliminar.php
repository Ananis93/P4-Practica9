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
<title>Eliminar</title>
</head>
<body>
<Table width= "50%" align="center" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>
<fieldset>


<form Action="Eliminar1.php" method="post">
ID de la  columna a eliminar:
<br/>
<br/>
<input type="text" name="ID"><br/>
<input type="submit" value="Enviar"/><br/>

</body>
</html>