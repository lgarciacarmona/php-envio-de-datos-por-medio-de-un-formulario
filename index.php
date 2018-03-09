<!DOCTYPE html>
<html>
<head>
	<title>prueba</title>
</head>
<body>

<?php 
$numero1 = 2;
$numero2 = 2;

echo $numero1 * $numero2;

$array = array ("burbuja","gorda");
echo $array[0];
?>

<form  action="formulario.php" method="GET">
	<input type="text" required="numero1" placeholder="numero" name="numero1"><br>
	<input type="text"  required="numero2" placeholder="numero" name="numero2"><br>
	<input type="submit" name="enviar">

</form>

</body>
</html> 