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
	background-color:#FCC;
	padding:5px;
	border:#FC6 5px solid;
}
.valido{
	font-size:15px; 
	text-align:center; 
	color:#CC0;
	font-weight:bold; 
}
.no_valido{
	font-size:15px; 
	text-align:center; 
	color:#F60;
	font-weight:bold;
}
	
</style>  
<body>

<h2>Bambi's Cafe</h2>

<form action="" method="post" name="datos_usuario" id="datos_usuarios"> 
<table width="15%" align="center">
<tr>
<td>Producto:</td>
<td><label for="prod_1"></label>
<input type="text" name="prod_1" id="prod_1"  /></td>
</tr>
<td>Código:</td> 
<td><label for="codigo_1"></label>
<input type="text" name="codigo_1" id="codigo_1"  /></td>
</tr>
<td>Cantidad:</td>
<td><label for="cant_1"></label>
<input type="text" name="cant_1" id="cant_1"  /></td>
</tr>
<td>Precio:</td>
<td><label for="prec_1"></label>
<input type="text" name="prec_1" id="prec_1"  /></td>
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
	
$producto=$_POST["prod_1"];
$codigo=$_POST["codigo_1"];
$cantidad=$_POST["cant_1"];
$precio=$_POST["prec_1"];



 switch ($producto){
 case ($producto=="Vanilla Latte" && $codigo=="1001"):
 echo "<p class='no_valido'> Compraste: </p>" ."<p class='valido'>" .$cantidad, " " .  $producto . " <p class='no_valido'>Total:</p>" . "<p class='valido'>$" . ($precio*$cantidad);
 break;
 case ($producto=="Cappuccino" && $codigo=="1002"):
 echo "<p class='no_valido'> Compraste: </p>" . "<p class='valido'> " .$cantidad, " " .  $producto . " <p class='no_valido'>Total:</p>" . "<p class='valido'>$" . ($precio*$cantidad);
 break;
 case ($producto=="Flat White" && $codigo=="1003"):
 echo "<p class='no_valido'> Compraste: </p>" . "<p class='valido'> " .$cantidad, " "   .  $producto . " <p class='no_valido'>Total:</p>" . "<p class='valido'>$" . ($precio*$cantidad);
 break;
 case ($producto=="Caramel Macchiato Helado" && $codigo=="1004"):
 echo "<p class='no_valido'> Compraste: </p>" . "<p class='valido'> " .$cantidad, " "   .  $producto . " <p class='no_valido'>Total:</p>" . "<p class='valido'>$" . ($precio*$cantidad);
 break;
 case ($producto=="Espresso" && $codigo=="1005"):
 echo "<p class='no_valido'> Compraste: </p>" . "<p class='valido'> " .$cantidad, " "   .  $producto . " <p class='no_valido'>Total:</p>" . "<p class='valido'> $" . ($precio*$cantidad);
 break;
 default;
  echo  "<p class='no_valido'> Producto o código no encontrado </p>";

 }
}

?>

</body>
</html>