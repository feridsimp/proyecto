<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
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
	color:#390;
	font-weight:bold; 
}
.no_valido{
	font-size:15px; 
	text-align:center; 
	color:#F00;
	font-weight:bold;
}
	
</style>  

<body>

<h2>Switch case</h2>
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
<td colspan="2" align="center"><input type="submit" name="enviando" id="enviando" value="Enviar"</td> 
</tr>
</table>
</form>

<?php

if (isset($_POST["enviando"])){
	
$nombre=$_POST["nombre_usuario"];
$edad=$_POST["edad_usuario"];

 switch ($edad){
 case ($edad <=17):
 echo "<p class='valido'> Eres menor de edad </p>";
 break;
 case ($edad <=40):
 echo "<p class='valido'> Eres joven </p>";
 break;
 case ($edad <=65):
 echo "<p class='valido'> Eres maduro </p>";
 break;
 case ($edad <=100):
 echo "<p class='valido'> Eres de la tercera edad</p>";
 break;
 default;
 echo  "<p class='no_valido'> Eres un superhumano </p>";
 }
}
 ?>

</body>
</html>