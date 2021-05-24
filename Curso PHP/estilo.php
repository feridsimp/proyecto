<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Programa PHP</title>
</head>

<style>
h1{
	text-align:center;
}
table{
	background-color:#CC0;
	padding:5px;
	border:#CF0 5 px solid;
}
.no_valido{
	font-size:18px;
	text-align:center;
	color:#F00;
	font-weight:bold;
}
.valido{
	font-size:18px;
	text-align:center;
	color:#090;
	font-weight:bold;
}
</style>

<body>
<h1>USANDO OPERADORES DE COMPARACIÓN</h1>
<form action="" method="post" name="datos_usuario" id="datos_usuario">
<table width="15%" align="center">
<tr>
<td>Nombre:</td>
<td><label for="nombre_usuario"></label>
<input type="text" name="nombre_usuario" id="nombre_usuario" /></td>
</tr>
<td>Edad:</td>
<td><label for="edad_usuario"></label>
<input type="text" name="edad_usuario" id="edad_usuario" /></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<tr>
<td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"</td>
</tr>
</table>
</form>

<?php

//Comprobar si 
if (isset($_POST["enviando"])){
	
//$_POST es una variable super global de PHP
$usuario=$_POST["nombre_usuario"];
$edad=$_POST["edad_usuario"];

if($usuario=="Yoongi" && $edad>= 18){
	echo "<p class='valido'> Puedes entrar </p>";
}
else{
	echo "<p class='no_valido'>No puedes entrar </p>";
}
}




?>
</body>
</html>