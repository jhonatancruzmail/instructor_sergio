<?php
$nuemros=0;
echo "Aqui se muestran los numeros multiplos de 5 del 1 al 50"."<br>"."<br>";
for ($numeros=1; $numeros <=50 ; $numeros++) { 
		if ($numeros%5==0) {
			echo "$numeros"."<br>";
		}
	}	

?>