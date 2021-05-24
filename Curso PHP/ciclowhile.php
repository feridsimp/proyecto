<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sin título</title>
</head>

<body>

<?
$numero = 9;
$factorial = 1;
while($numero > 1){
	$factorial = $factorial * $numero;
	$numero = $numero-1;
}
echo "El factorial de 9 es " . $factorial;
?>
</body>
</html>