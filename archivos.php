<?php

$archivo = fopen(bweb2.txt, "r");
$datosFiltrados = array();
$contador = 0;
$nombres;

while (!feof($archivo))
{
	$lineaActual = fgets($archivo);
	$contador++;

	$datosFiltrados[] = substr($lineaActual, start);
}
fclose($archivo);

foreach ($$datosFiltrados as $dato) {
	echo $dato."<br>";
}



?>