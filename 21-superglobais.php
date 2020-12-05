<?php

//    Superglobais
// variaveis pre definidas do PHP

//***************** $GLOBALS (Usada para acessar variaveis globais de qualquer parte do script )

$x = 10;
$y = 15;

function soma() {
	echo $GLOBALS['x'] + $GLOBALS['y'];
}

soma();

echo "<hr>";
//***************** $_SERVER (Comtem informaçoes sobre cabeçalho, caminhos e outro indices(Veja todas os incices em php $_SERVER))

echo $_SERVER['PHP_SELF']. "<br>";
echo $_SERVER['SERVER_NAME']. "<br>";
echo $_SERVER['SCRIPT_FILENAME']. "<br>";
echo $_SERVER['DOCUMENT_ROOT']. "<br>";
echo $_SERVER['SERVER_PORT']. "<br>";
echo $_SERVER['REMOTE_ADDR']. "<br>";

echo("<hr>");
// ******************** $_POST ,, $_GET (usadas para coletar dados de formularios)  (formulario em 22-formularios=> index.php)   (exemplo na pasta 22)

