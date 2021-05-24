<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style>
 table{
	 width:70%;
	 border:1px dotted #CF0;
	 margin:auto;
 }
</style>
</head 
><body>
<?php
//Creamos las variables que indicaran el servidor, el nombre, usuario y contraseña para conectar a la base de datos
$db_host="localhost";
$db_nombre="ventas";
$db_usuario="root";
$db_contra="";

//Requerimos de una función que conecte con la Base de Datos
$conexion=mysqli_connect($db_host,$db_usuario,$db_contra,$db_nombre);

//Función que detecta si hay errores al conectarnos a la base de datos
	if(mysqli_connect_errno()){
		echo "Fallo al conectar";
		exit();
	}

//Función para que se escriba correctamente lo acentos
mysqli_set_charset($conexion,"utf8");

//Enlace a la consulta
$consulta="select * from articulos where ARTICULO LIKE'TENIS%'";

//Crea una tabla virtual donde se almacena la consulta
$resultados=mysqli_query($conexion,$consulta);

//Desplegamos el array cada indice es un campo, de momento solo desplegara el primer registro
while ($fila=mysqli_fetch_array($resultados,MYSQLI_ASSOC)){
echo "<table><tr><td>";	
echo $fila["CLAVE"]."</td><td>";
echo $fila["ARTICULO"]."</td><td>";
echo $fila["PRECIO"]."</td><td>";
echo $fila["ORIGEN"]."</td><td>";
echo $fila["PAIS"]."</td><td>";
echo $fila["ALMACEN"]."</td><td>";
echo $fila["FECHA"]."</td><td>";
echo $fila["COLOR"]."</td><td>";
echo $fila["FOTO"]."</td><td></tr></table>"; 
echo "<br>";
echo "<br>";
}

//Cerrar la conexión con la BDD
mysqli_close($conexion);

?>
</body>
</html>