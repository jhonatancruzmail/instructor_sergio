<?php
$numero=rand(-100,100);
if ($numero<0) {
	echo "El numero ".$numero." es negativo";
};
if ($numero>0) {
	echo "El numero ".$numero." es positivo";
};
if ($numero==0) {
	echo "El numero es cero por lo que en aritmetica no tiene signo positivo o negativo";
}
?>