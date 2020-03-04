<!DOCTYPE html>
<html>
<head>
	<title>generador numero aleatoreo del 1 al 20</title>
</head>
<body>
<?php
$numero=rand(1,20);

if ($numero>=10) {
	echo "El numero generado aleatoreamete es ".$numero." y el triple es ".$numero*3;
}

if ($numero<10) {
	echo "El numero generado aleatoreamete es ".$numero." y la cuarta parte es ".$numero/4;
}
		
?>
</body>
</html>
