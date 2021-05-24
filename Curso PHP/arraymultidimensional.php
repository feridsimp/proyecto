<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>


<body>

<h2>Array Multidimensional</h2>

     
<?php

$entretenimiento=array("Cine"=>array("Terror:"=>"La bruja", 
                          "Acción"=>"Duro de matar", 
						  "Drama"=>"El cisne negro"), 
                          "Serie"=>array("Documental"=>"Nuestro Planeta", 
                          "Comedia"=>"I'm not okay with this",
						  "Político"=>"House of cards"),
                          "Música"=>array("Rock"=>"Who wants to be lonely",
                          "Balada"=>"I just call to say i love you", 
                          "Mexicana"=>"La llorona"));

foreach($entretenimiento as $clase_entre=>$entre){
	echo "$clase_entre: <br>";
	foreach($entre as $tipo => $tipo_entre) {
		echo "$tipo=$tipo_entre <br>";
	}
	echo "<br>";
}






?>
</body>
</html>