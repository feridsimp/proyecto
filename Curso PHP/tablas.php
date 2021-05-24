<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
   <title>Tablas de multiplicar.</title> 
</head>
<body>
<h1>Tablas de multiplicar</h1>

<?php

    for ($i = 0; $i <= 10; $i++) {
		
		if($i==11){
			echo "<p> Fin de las tablas </p>";
		continue;
	    }
echo "3 * $i = " . 3*$i . "<br>"; 
echo "7 * $i = " . 7*$i . "<br>";  
echo "9 * $i = " . 9*$i . "<br>";  
  
	}

?>
</body>
</html>