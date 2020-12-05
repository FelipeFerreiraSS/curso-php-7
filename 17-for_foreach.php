<?php

//for ==> para (usado se vc ja sabe o numero de repetiçoes de precisa)
for ($contador = 0; $contador <= 10; $contador++):
	//echo "O contador é $contador <br>";
	echo "8 x $contador = ".($contador*8)."<br>";
endfor;

echo "<hr>";

$cores = array("vermelho", "vermelho", "azul");

foreach ($cores as $valor) {
	echo $valor."<br>";
}