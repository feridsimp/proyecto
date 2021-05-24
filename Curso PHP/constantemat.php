<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>
<body>
<style>

.verde{
	font-size:18px;
	text-align:center;
	color:#CC0;
	font-weight:bold;
}
.rojo{
	font-size:18px;
	text-align:center;
	color:#C00;
	font-weight:bold;
}
</style>
<body>
<h1>CALCULADORA PHP</h1>
<p>&nbsp;</p>
<form name="form1" method="post" action="">
<p>
<label for="num1"> </label>
<input type="text" name="num1" id="num1" />
<label for="num2"> </label>
<input type="text" name="num2" id="num2" />
<label for="Operaciones"></label>
<select name="Operaciones" id="Operaciones">
<option> Suma </option>
<option> Resta</option>
<option> Multiplicación</option>
<option> División</option>
<option> Módulo</option>
</select>
</p>
<p>
<input type="submit" name="button" id="button" value="Enviar" onclick="prueba" />
</p>
</form>
<p>&nbsp;</p>
<?php

if (isset($_POST["button"])){
	
	$numero1=$_POST["num1"];
	$numero2=$_POST["num2"];
	$operacion=$_POST["Operaciones"];
	
	if(!strcmp("Suma",$operacion)){
		echo"<p class='verde'> El resultado de la suma es: </p>" . "<p class='rojo'>" . ($numero1+$numero2);
	}
		if(!strcmp("Resta",$operacion)){
		echo"<p class='verde'> El resultado de la resta es: </p>" . "<p class='rojo'>" . ($numero1-$numero2);
	}
    
		if(!strcmp("Multiplicación",$operacion)){
			echo"<p class='verde'> El resultado de la multiplicación es: </p>" . "<p class='rojo'>" . ($numero1*$numero2);
	}
	if(!strcmp("División",$operacion)){
			echo"<p class='verde'> El resultado de la división es: </p>" . "<p class='rojo'>" . ($numero1/$numero2);
	}
	if(!strcmp("Módulo",$operacion)){
			echo"<p class='verde'> El resultado del módulo es: </p>" . "<p class='rojo'>" . ($numero1%$numero2);
	}
}
		
	?>
</body>
</html>