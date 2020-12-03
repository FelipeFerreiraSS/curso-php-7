<?php

//constantes (Um valor unico e não altera durante o script)

define("NOME", "Felipe");
define("IDADE", 24);
define("ALTURA", 1.70);

define("TIMES", ['vasco', 'flamengo', 'santos']);

echo 'Meu nome é '.NOME.' e minha idade é '.IDADE.' e minha altura é '.ALTURA.' .';
echo "<hr>";
echo TIMES[2];

//as constantes são globais
function exibeNome() {
	echo NOME;
}

exibeNome();