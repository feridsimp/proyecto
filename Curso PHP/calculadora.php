<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<?php

if (isset($_POST["button"])){
	
	$numero1=$_POST["num1"];
	$numero2=$_POST["num2"];
	$operacion=$_POST["Operaciones"];
	calcular($operacion);
}
function calcular($calculo){
	global $numero1, $numero2;
	
	if(!strcmp("Suma",$calculo)){
		echo"<p class='verde'> El resultado de la suma es: </p>" . "<p class='rojo'>" . ($numero1+$numero2);
	}
		if(!strcmp("Resta",$calculo)){
		echo"<p class='verde'> El resultado de la resta es: </p>" . "<p class='rojo'>" . ($numero1-$numero2);
	}
    
		if(!strcmp("Multiplicación",$calculo)){
			echo"<p class='verde'> El resultado de la multiplicación es: </p>" . "<p class='rojo'>" . ($numero1*$numero2);
	}
	if(!strcmp("División",$calculo)){
			echo"<p class='verde'> El resultado de la división es: </p>" . "<p class='rojo'>" . ($numero1/$numero2);
	}
	if(!strcmp("Módulo",$calculo)){
			echo"<p class='verde'> El resultado del módulo es: </p>" . "<p class='rojo'>" . ($numero1%$numero2);
	}
}

?>
</body>
</html>