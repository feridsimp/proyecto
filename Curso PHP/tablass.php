<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?php //Programa de tablas de multiplicar
for ($tabla=1; $tabla <=10 ; $tabla++){
/* en esta línea la variable $tabla nos sirve para disponer de números del 1 al 10 - Serán las tablas de multiplicar*/
	echo 'Tabla del '.$tabla.'<br />';
for ($x=1; $x <=10 ; $x++){
/* aprovechamos la variable $tabla para el numero de inicio y la tabla que estamos ejecutando y la variable $x para obtener los otros 10 números de cada tabla con ello ya disponemos de todo lo necesario para ejecutar las tablas del 1 al 10 */
	echo '[ '.$tabla.' * '.$x.' = '.$tabla*$x.' ] ';
}/*Se cierra el bucle del 1 al 10 de la variable $x y se repite el bucle de $tabla hasta que llegue a 10*/
echo '<hr />';
} /*Cuando se cumple el bucle de las tablas del 1 al 10 se cierra el bucle $tabla llega a tener el valor de 10*/
?>

</body>
</html>