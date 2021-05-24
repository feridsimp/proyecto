<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>


<body>
<?php

function conectar(){
	$user="root";
	$pass="";
	$server="localhost";
	$db="almacen";
	$con=mysql_connect($server,$user,$pass) or die ("Error al conectar a la base de datos".mysql_errno());
	mysql_select_db($db,$con);
	
	return $con;
	
	
}



?>

</body>
</html>