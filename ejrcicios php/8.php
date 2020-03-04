<?php
$contador=0;
$jugador = array ("messi","CR7","falcao","ramos","roben");
echo "la alineacion del equipo esta compuesta por";

while ( $contador<= 4) {
	echo ", ".$jugador[$contador];
	$contador++;
}
echo "."
?>