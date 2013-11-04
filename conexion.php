<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Insertar Datos</title>
</head>
<body>
<Table width= "50%" align="center" border="0" cellspacing="0" cellpadding="0">
<tr>
<td>
<fieldset>

<?php

$conexion = mysql_connect("localhost","root","")
or die ("Fallo en el establecimiento de la conexión");
echo "Contactos en directorio:<br/>";

mysql_select_db("directorio")
or die("Error en la selección de la base de datos");

$result = mysql_query ("select * from contacto" )
or die("Error en la consulta SQL");

while( $row = mysql_fetch_array ( $result )) {
   
   echo "<br/>";
   echo $row [ "id" ];
   echo " ";	
   echo $row [ "nombre" ];
   echo " ";
   echo $row [ "telefono" ];
   echo " ";
   echo $row [ "celular" ];
   echo " ";
   echo $row [ "domicilio" ];
   echo " ";

}

?>
<form Action="Agregar.php" method="post">
<br/>
<br/>
<input type="submit" value="Agregar Datos"/>
<br/>
<br/>
<input type="submit" onclick = "this.form.action= 'Editar.php'" value="Editar Datos"/>
<br/>
<br/>
<input type="submit" onclick = "this.form.action= 'Eliminar.php'" value= "Eliminar Datos"/>
<br/>
<br/>
<input type="submit" onclick = "this.form.action= 'Formulario.php'" value="Cerrar Conexion"/>



</body>
</html> 