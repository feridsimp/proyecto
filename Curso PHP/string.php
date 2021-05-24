<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>

<style>
 .resaltar{
	color:#390;
	font-weight:bold;
}
 .resaltar2{
	 color:#F00;
	 font-weight:bold;
 }
</style>
</head>

<body>
<?php

$variable1="daechwita";
$variable2="DAECHWITA";
$resultado=strcmp ($variable1,$variable2); //devuelve 1 si no son iguales y 0 si son iguales
if(!$resultado){
	echo "<p class='resaltar'> El resultado COINCIDE</p>";
}
else{
	
	echo "<p class='resaltar2'> El resultado NO coincide</p>";
}
?>
</body>
</html>