<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php


for ($i=0;$i<=10;$i++){
	if ($i==3){
		echo "<p> Tabla del 3 </p>";
		
		continue;
	}
	if ($i==7){
		echo "<p> Tabla del 7 </p>";
		continue;
	}
	if ($i==9){
		echo "<p> Tabla del 9 </p>";
		continue;
	}
	
}
?>
</body>
</html>