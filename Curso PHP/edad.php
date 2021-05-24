<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Validación de edad</title>
</head>
<style>
h2{
	text-align: center;
	font-weight: bold;
} 
table{
	background-color:#FC3;
	padding:5px;
	border:#FC6 5px solid;
}
.valido{
	font-size:15px; 
	text-align:center; 
	color:#F60;
	font-weight:bold; 
}
</style>  

<body>

<h2>VALIDACION DE EDAD</h2>
<form action="" method="post" name="datos_usuario" id="datos_usuarios"> 
<table width="15%" align="center">
<tr>
<td>Nombre:</td>
<td><label for="nombre_usuario"></label>
<input type="text" name="nombre_usuario" id="nombre_usuario"  /></td>
</tr>
<td>Edad:</td> 
<td><label for="edad_usuario"></label>
<input type="text" name="edad_usuario" id="edad_usuario"  /></td>
</tr>
<tr> 
<td>&nbsp;</td>
<td>&nbsp;</td>
</tr>
<td colspan="2" align="center"><input type="submit" name="enviado" id="enviado" value="Enviar"</td> 
</tr>
</table>
</form>

<?php
if(isset($_POST["enviado"])){
	$edad=$_POST["edad_usuario"];
	if($edad <=17){
		echo "<p class='valido'>Eres menor de edad</p>"; 
	}
	else if($edad<=40){
		echo "<p class='valido'>Eres mayor de edad</p>";
	}
	else if($edad<=65){
		echo "<p class='valido'>Eres una persona madura</p>";
	} 
	else{ 
		echo "<p class='valido'>Eres de la tercera edad</p>";
	}
}
?>
</body>
</html>