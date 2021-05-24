<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>dios es grande</title>
<style>
table{
	width:70%;
	border:1px dotted #FC6;
	margin:auto;
}
</style>
</head>

<body>
<?php
//GODOY AGUILAR AMBAR :D

//Almacenar en la variable de busqueda
$busqueda=$_GET["buscar"];

require("datosconectt8.php");

$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

if(mysqli_connect_errno()){
		echo "NO EXISTE LA BASE DE DATOS";
		exit();
}
mysqli_select_db($conexion,$db_nombre) or die ("Nombre de la base erroneo");

$consulta="select * from datosbusqueda where NOMBRE LIKE'%$busqueda%'";

mysqli_set_charset($conexion,"utf8");

$resultado=mysqli_query($conexion,$consulta);

while($fila=mysqli_fetch_array($resultado,MYSQLI_ASSOC)){
	echo"<table><tr><td>";
	echo $fila["codigo"]. "</td><td>";
    echo $fila["seccion"]. "</td><td>";
    echo $fila["nombre"]. "</td><td>";
    echo $fila["precio"]. "</td><td>";
    echo $fila["fecha"]. "</td><td>";
    echo $fila["importado"]. "</td><td>";
    echo $fila["paisorigen"]. "</td><td></tr></table>"; 
	
	echo "<br>";

}
mysqli_close($conexion);		
?>		
</body>
</html>