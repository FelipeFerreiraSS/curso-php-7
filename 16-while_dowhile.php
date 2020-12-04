<?php
// while e dowhile  //(enquanto uma condição for verdadeira)

$contador = 1;

while ($contador <= 10):  
	echo "Contador é $contador <br>";
	$contador++;
endwhile;

echo "<hr>";

$contador = 1;

do {  //faza esse treço de codigo emquanto
	echo "Contador é $contador <br>";
	$contador++;
} while ( $contador <= 10);