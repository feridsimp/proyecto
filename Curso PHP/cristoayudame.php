<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>
<h1>Tablas de Multiplicar</h1>;
<?php


for($i=1;$i<=11;$i++){
	
	if($i==11){
		echo "<p> Fin de las tablas </p>";
		continue;
	}
	echo "3 * $i = " . 3*$i . "<br>";
	{
	echo "7 * $i = " . 7*$i . "<br>";
	}
	{
		echo "9 * $i = " . 9*$i . "<br>";
	}
	

	
}

?>
</body>
</html>