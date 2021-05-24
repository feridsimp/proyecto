<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<style>
.verde{
	font-size:14px;
	text-align:left;
	color:#0C0;
	font-weight:bold;
}
.rojo{
	font-size:14px;
	text-align:left;
	color:#C00;
	font-weight:bold;
}
.azul{
	font-size:14px;
	text-align:left;
	color:#39C;
	font-weight:bold;
}
.amarillo{
	font-size:14px;
	text-align:left;
	color:#CC0;
	font-weight:bold;
}

</style>

<body>
<?php
define("AUTOR","Ambar Godoy Aguilar");

echo "<p class='verde'> El nombre del elaborador es: </p>". AUTOR . "<br>";

echo "<p class='rojo'> El número de la línea es: </p>" . __LINE__ . "<br>";

echo "<p class='azul'> El nombre y directorio del archivo es: </p>" . __FILE__ . "<br>";

echo "<p class='amarillo'> El directorio actual del archivo es: </p>" . __DIR__ . "<br>";
?>
</body>
</html>